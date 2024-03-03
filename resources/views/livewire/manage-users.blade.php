<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __("Users Management") }}
        </h2>
    </x-slot>

    {{-- Sort and Search --}}
    <div class="pb-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-4 mt-8 flex flex-row items-center justify-between">
                <div class="flex w-1/3 items-center">
                    <!-- Set width to 1/3 -->
                    <label
                        for="sortBy"
                        class="mr-2 block text-sm font-medium text-gray-700"
                    >
                        Sort By
                    </label>
                    <select
                        id="sortBy"
                        wire:model="sortBy"
                        wire:change="sort($event.target.value)"
                        class="select select-bordered mr-4 w-[303px]"
                    >
                        <option value="latest">Latest</option>
                        <option value="oldest">Oldest</option>
                    </select>
                </div>
                <div class="w-3/4">
                    <!-- Set width to 3/4 -->
                    <label class="gap input input-bordered flex items-center">
                        <input
                            wire:model.live="search"
                            type="text"
                            class="grow border-none"
                            placeholder="Search"
                        />
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            fill="currentColor"
                            class="h-4 w-4 opacity-70"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </label>
                </div>
            </div>

            {{-- Promoted to admin session message --}}
            @if (session()->has("message"))
                <div
                    wire:poll.1500ms="hideMessage"
                    class="alert alert-success mb-4 text-white shadow-lg"
                >
                    {{ session("message") }}
                </div>
            @endif

            {{-- Admin role revoked session message --}}
            @if (session()->has("messageRevoked"))
                <div
                    wire:poll.1500ms="hideMessageRevoked"
                    class="alert alert-error mb-4 text-white shadow-lg"
                >
                    {{ session("messageRevoked") }}
                </div>
            @endif

            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
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
                                    <td>
                                        {{ $user->role == 1 ? "Admin" : "User" }}
                                    </td>
                                    <td>
                                        @if ($user->role == 0)
                                            <button
                                                class="btn bg-indigo-600 text-white"
                                                onclick="scrollToTop();"
                                                wire:click="promoteToAdmin({{ $user->id }})"
                                            >
                                                Promote
                                            </button>
                                        @elseif ($user->role == 1)
                                            <button
                                                class="btn bg-red-500 text-white"
                                                onclick="scrollToTop();"
                                                wire:click="revokeToUser({{ $user->id }})"
                                            >
                                                Revoke
                                            </button>
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

<script>
    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
</script>
