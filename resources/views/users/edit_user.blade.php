<x-app-layout>
    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            @include('layouts.partials.system._message')
        <div class="w-3/4">
            <h1 class="text-4xl"><bold>Edit User</bold></h1>
            <form method="POST" action="{{ url('users/'.$user->id)  }}" class="pt-8">
            @csrf
                {{ method_field('PUT') }}

            <!-- Name -->
            <x-label for="name" :value="__('Name:')" />

            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus value="{{ $user->name }}" />

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email:')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus value="{{ $user->email }}" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password:')" />

                <x-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required autocomplete="new-password" value="{{ $user->password }}"/>
            </div>

            <!-- Role -->
            <div class="mt-4">
                @foreach($roles as $role)
                    @if($role == $user->getRoleNames()->first())
                        <input type="radio" name="role" value="{{  $user->getRoleNames()->first() }}" checked>
                            {{$role}}
                    @else
                    <input type="radio" name="role" value="{{  $role }}">
                        {{$role}}
                    @endif
                @endforeach
            </div>
            <div class="mt-4">
                <x-button class="ml-4 bg-green-400 p-4">
                    {{ __('Save') }}
                </x-button>
            </div>
            </form>
        </div>
        </div>
    </div>
</x-app-layout>
