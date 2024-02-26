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
    public $message;
    public $messageRevoked;


    protected $queryString = ['sortBy'];

    // Promote to Admin function
    public function promoteToAdmin($userId)
    {
        $user = User::find($userId);
        if ($user) {
            $user->update(['role' => 1]); // Promote user to admin
            session()->flash('message', $user->name . ' promoted to admin successfully!');
            $this->dispatch('hideMessage'); // Dispatch event to hide message
            $this->dispatch('scrollToTop'); // Dispatch event to scroll to top
        }
    }

    // Revoke admin to user function
    public function revokeToUser($userId)
    {
        $user = User::find($userId);
        if ($user) {
            $user->update(['role' => 0]); // Revoke admin role
            session()->flash('messageRevoked', $user->name . ' Admin role revoked successfully!');
            $this->dispatch('hideMessageRevoked'); // Dispatch event to hide message revoked
            $this->dispatch('scrollToTop'); // Dispatch event to scroll to top
        }
    }

    public function hideMessage()
    {
        $this->reset(['message']);
    }

    public function hideMessageRevoked()
    {
        $this->reset(['messageRevoked']);
    }

    // Sort the data from latest by default
    public function sort($sortBy)
    {
        if ($sortBy === $this->sortBy) {
            $this->sortBy = ''; // Temporarily change to trigger Livewire update
            $this->sortBy = $sortBy;
        } else {
            $this->sortBy = $sortBy;
        }
    }

    // Search function
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
