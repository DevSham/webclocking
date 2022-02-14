<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="col-lg-12 grid-margin stretch-card">
                        @include('layouts.partials.system._message')
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center"><b>List Of  all Roles</b></h2>
                                <table class="min-w-full divide-y divide-gray-200 py-4">
                                    <thead class="bg-green-700">
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">#</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Role Name</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Edit</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Delete</th>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    <?php $n=1; ?>
                                    @foreach($roles as $role)
                                        <tr>
                                            <td class = "px-6 py-4 whitespace-nowrap">{{ $n++}}</td>
                                            <td class = "px-6 py-4 whitespace-nowrap">{{ $role->name}}</td>
                                            <td class = "px-6 py-4 whitespace-nowrap">
                                                <a href="/product/{{ $role->id }}/edit" class="btn btn-primary">
                                                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Edit</button>
                                                </a>
                                            </td>
                                            <td class = "px-6 py-4 whitespace-nowrap">
                                                <form action="/product/{{ $role->id }}" method="POST">
                                                    {{method_field('DELETE')}}
                                                    {{ csrf_field() }}
                                                    <input type="submit" class="bg-red-500 rounded w-4/4 p-2 text-white" value="Delete"/>
                                                </form><a href="/product/{{ $role->id }}/delete"></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="flex">
                                    <div class="flex-1 justify-end">
                                        {{ $roles->links('pagination::tailwind') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
