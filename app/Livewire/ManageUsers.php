<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class ManageUsers extends Component
{
    use WithPagination;

    public $sortBy = 'latest';
    public $search = '';

    protected $queryString = ['sortBy'];

    public function promoteToAdmin($userId)
    {
        $user = User::find($userId);
        if ($user) {
            $user->update(['role' => 1]); // Promote user to admin
        }
    }

    public function revokeToUser($userId)
    {
        $user = User::find($userId);
        if ($user) {
            $user->update(['role' => 0]); // Revoke admin role
        }
    }

    public function sort($sortBy)
    {
        if ($sortBy === $this->sortBy) {
            $this->sortBy = ''; // Temporarily change to trigger Livewire update
            $this->sortBy = $sortBy;
        } else {
            $this->sortBy = $sortBy;
        }
    }

    public function search()
    {
        $this->resetPage(); // Reset pagination when search query changes
    }

    public function render()
    {
        $usersQuery = User::query();

        // Apply search filter if query is not empty
        if (!empty($this->search)) {
            $usersQuery->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%');
        }

        // Sort by latest or oldest
        switch ($this->sortBy) {
            case 'latest':
                $usersQuery->orderBy('id', 'desc');
                break;
            case 'oldest':
                $usersQuery->orderBy('id', 'asc');
                break;
            default:
                $usersQuery->latest('id', 'desc');
                break;
        }

        $users = $usersQuery->paginate(10);

        return view('livewire.manage-users', ['users' => $users])->layout('layouts.app');
    }

}
