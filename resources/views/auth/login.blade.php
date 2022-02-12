<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">

        </x-slot>
        <p class="p-4 text-center">Sign In</p>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus  placeholder="Email"/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>
            <!-- login button -->
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3 b bg-green-500">
                    {{ __('Log in to Clocking') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
