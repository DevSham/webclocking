<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="flex justify-center items-center w-70">

                        <div class="w-full bg-white rounded shadow-2xl p-8 m-4">
                            @include('layouts.partials.system._message')

                            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase text-center">
                                Create User Role
                            </h6>
                            <form method="POST" action="{{ url('roles') }}">
                                @csrf
                                <div>
                                    <x-label for="name" :value="__('Role Name')" />

                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                </div>
                                <div class="mt-5">
                                    <x-label for="name" :value="__('Role Permission')" />

                                @if(isset($permissions))
                                        @foreach($permissions as $permission)
                                    <label class="color-dark checkbox">
                                        <input type="checkbox" value="{{ $permission->id }}" name="permission[]">
                                        {{ $permission->name }}
                                    </label>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="mt-5">
                                    <x-button class="bg-green-500">
                                        {{ __('Create role') }}
                                    </x-button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



