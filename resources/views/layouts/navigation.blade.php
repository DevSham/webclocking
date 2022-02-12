<nav x-data="{ open: false }" class="bg-green-500 border-b border-gray-100 bg-green-500">
    <!-- Primary Navigation Menu -->
    <div class="w-full mx-auto sm:px-6 lg:px-8 fixed bg-green-500">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center ml-40 text-white">
                    <a href="{{ route('dashboard') }}">
                        {{--                        <x-application-logo class="block h-10 w-auto fill-current text-white" />--}}
                        Clocking
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-white">


                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="sm:flex sm:items-center sm:ml-6 mr-40">
                <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-gray-800">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white mr-12"><i class="bx bx-bell"></i></span>
                    <span class="text-sm font-medium">Notifications</span>
                    <span class="ml-auto mr-5 text-sm bg-red-100 rounded-full px-3 py-px text-red-500">5</span>
                </a>
                 <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">
                        {{ __('Logout') }}
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden text-white">
        <div class="pt-2 pb-3 space-y-1 text-white">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-white">
                {{ __('Clocking') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-sm text-white">{{ Auth::user()->name }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                                           onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
