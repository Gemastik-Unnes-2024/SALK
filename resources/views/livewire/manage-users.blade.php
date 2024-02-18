<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users Management') }}
        </h2>
    </x-slot>

    <div class="pb-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-row items-center justify-between mt-8 mb-4">
                <div class="flex items-center w-1/3"> <!-- Set width to 1/3 -->
                    <label for="sortBy" class="block text-sm font-medium text-gray-700 mr-2">Sort By</label>
                    <select id="sortBy" wire:model="sortBy" wire:change="sort($event.target.value)" class="select select-bordered w-[303px] mr-4">
                        <option value="latest">Latest</option>
                        <option value="oldest">Oldest</option>
                    </select>
                </div>
                <div class="w-3/4"> <!-- Set width to 3/4 -->
                    <label class="input input-bordered flex items-center gap">
                        <input wire:model.live='search' type="text" class="grow border-none" placeholder="Search" />
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" /></svg>
                    </label>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- Table content --}}
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role == 1 ? "Admin" : "User" }}</td>
                                <td>
                                    @if ($user->role == 0)
                                    <button class="btn bg-indigo-600 text-white" wire:click="promoteToAdmin({{ $user->id }})">Promote</button>
                                    @elseif ($user->role == 1)
                                    <button class="btn bg-red-500 text-white" wire:click="revokeToUser({{ $user->id }})">Revoke</button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- Pagination --}}
                <div class="p-4">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
