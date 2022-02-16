<form method="POST" action="{{ url('users') }}">
@csrf

<!-- Name -->
    <div>
        <x-label for="name" :value="__('Name')" />

        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-label for="email" :value="__('Email')" />

        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="" required />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-label for="password" :value="__('Password')" />

        <x-input id="password" class="block mt-1 w-full"
                 type="password"
                 name="password"
                 required autocomplete="new-password" />
    </div>

    <!-- Role -->
    <div class="mt-4">
        @foreach($roles as $role)
            <input type="radio" name="role" value="{{  $role }}">
                {{$role}}
        @endforeach
    </div>
