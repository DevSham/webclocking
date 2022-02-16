<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @include('layouts.partials.system._message')
            <div class="card">
                <div class="card-body">
                    <div class="flex justify-between">
                        <div class="flex-1 text-4xl">
                            <h1><bold>Users</bold></h1>
                        </div>
                        <div class="shrink justify-end">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-green-400 text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                + Add User
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Add User</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            @include('users.create_user')
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn bg-gray-400 text-white" data-bs-dismiss="modal">Close</button>
                                            <x-button class="bg-green-400 text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                + Add User
                                            </x-button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200 py-4">
                        <thead class="bg-blue-400">
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white tracking-wider">#</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white tracking-wider">Name</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white tracking-wider">Email</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white tracking-wider">Role</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white tracking-wider">Created</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white tracking-wider">Delete</th>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        <?php $n=1; ?>
                        @foreach($users as $user)
                            <tr>
                                <td class = "px-6 py-4 whitespace-nowrap">{{ $n++}}</td>
                                    <td class = "px-6 py-4 whitespace-nowrap">
                                        <a href="{{ url('users/'.$user->id.'/edit') }}" class="underline decoration-green-500 text-green-400">
                                            {{ $user->name}}
                                        </a>
                                    </td>
                                <td class = "px-6 py-4 whitespace-nowrap">{{ $user->email}}</td>
                                <td class = "px-6 py-4 whitespace-nowrap">{{ $user->getRoleNames()->first()}}</td>
                                <td class = "px-6 py-4 whitespace-nowrap">{{ $user->created_at}}</td>
                                <td class = "px-6 py-4 whitespace-nowrap">
                                    <form action="/users/{{ $user->id }}/delete" method="POST">
                                        {{method_field('DELETE')}}
                                        {{ csrf_field() }}
                                        <input type="submit" class="bg-red-500 rounded w-4/4 p-2 text-white" value="Delete" onclick="alert("woo")"/>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="flex">
                        <div class="flex-1 justify-end">
                            {{ $users->links('pagination::tailwind') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
