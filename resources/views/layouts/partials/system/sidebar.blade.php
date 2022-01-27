<div class="flex flex-row bg-green-500 max-h-screen shadow-lg">
    <div class="flex flex-col w-60 h-full bg-green-500 overflow-hidden fixed shadow-lg">
        <div class="flex items-center justify-center h-20 shadow-md">
            <h1 class="text-3xl uppercase text-white">Menu</h1>
        </div>
        <ul class="flex flex-col py-4">
            <li>
                <a href="{{ route('product.create') }}" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-white">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class="bx bx-home"></i></span>
                    <span class="text-sm font-medium">Product</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-gray-800">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class="bx bx-music"></i></span>
                    <span class="text-sm font-medium">Delivery</span>
                </a>
            </li>
            <li>
                <a href="" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-gray-800">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class="bx bx-drink"></i></span>
                    <span class="text-sm font-medium">Stocking</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-gray-800">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class="bx bx-shopping-bag"></i></span>
                    <span class="text-sm font-medium">Stock Taking</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-gray-800">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class="bx bx-chat"></i></span>
                    <span class="text-sm font-medium">Zakat Calculation</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-gray-800">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class="bx bx-user"></i></span>
                    <span class="text-sm font-medium">Reports</span>
                </a>
            </li>
            <li>
                <a href="" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-gray-800">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class="bx bx-bell"></i></span>
                    <span class="text-sm font-medium">Members</span>
                    <span class="ml-auto mr-6 text-sm bg-red-100 rounded-full px-3 py-px text-red-500">5</span>
                </a>

            </li>
            <li>
                <div class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-gray-800">
                    <form method="POST" action="{{ route('logout') }}" >
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>

                </div>


            </li>
            {{--            <li>--}}
            {{--                <div @click.away="open = false" class="relative" x-data="{ open: false }">--}}
            {{--                    <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">--}}
            {{--                        <span>Dropdown</span>--}}
            {{--                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>--}}
            {{--                    </button>--}}
            {{--                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">--}}
            {{--                        <div class="">--}}
            {{--                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #1</a>--}}
            {{--                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #2</a>--}}
            {{--                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #3</a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </li>--}}
            {{--            <li>--}}
            {{--                <div class="group inline-block">--}}
            {{--                    <button--}}
            {{--                        class="outline-none focus:outline-none border px-3 py-1 bg-white rounded-sm flex items-center min-w-32"--}}
            {{--                    >--}}
            {{--                        <span class="pr-1 font-semibold flex-1">Dropdown</span>--}}
            {{--                        <span>--}}
            {{--                              <svg--}}
            {{--                                  class="fill-current h-4 w-4 transform group-hover:-rotate-180--}}
            {{--                                transition duration-150 ease-in-out"--}}
            {{--                                  xmlns="http://www.w3.org/2000/svg"--}}
            {{--                                  viewBox="0 0 20 20"--}}
            {{--                              >--}}
            {{--                                <path--}}
            {{--                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"--}}
            {{--                                />--}}
            {{--                              </svg>--}}
            {{--                        </span>--}}
            {{--                    </button>--}}
            {{--                    <ul--}}
            {{--                        class="bg-white border rounded-sm transform scale-0 group-hover:scale-100 absolute--}}
            {{--  transition duration-150 ease-in-out origin-top min-w-32"--}}
            {{--                    >--}}
            {{--                        <li class="rounded-sm px-3 py-1 hover:bg-gray-100">Programming</li>--}}
            {{--                        <li class="rounded-sm px-3 py-1 hover:bg-gray-100">DevOps</li>--}}
            {{--                        <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">--}}
            {{--                            <button--}}
            {{--                                class="w-full text-left flex items-center outline-none focus:outline-none"--}}
            {{--                            >--}}
            {{--                                <span class="pr-1 flex-1">Langauges</span>--}}
            {{--                                <span class="mr-auto">--}}
            {{--          <svg--}}
            {{--              class="fill-current h-4 w-4--}}
            {{--            transition duration-150 ease-in-out"--}}
            {{--              xmlns="http://www.w3.org/2000/svg"--}}
            {{--              viewBox="0 0 20 20"--}}
            {{--          >--}}
            {{--            <path--}}
            {{--                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"--}}
            {{--            />--}}
            {{--          </svg>--}}
            {{--        </span>--}}
            {{--                            </button>--}}
            {{--                            <ul--}}
            {{--                                class="bg-white border rounded-sm absolute top-0 right-0--}}
            {{--  transition duration-150 ease-in-out origin-top-left--}}
            {{--  min-w-32--}}
            {{--  "--}}
            {{--                            >--}}
            {{--                                <li class="px-3 py-1 hover:bg-gray-100">Javascript</li>--}}
            {{--                                <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">--}}
            {{--                                    <button--}}
            {{--                                        class="w-full text-left flex items-center outline-none focus:outline-none"--}}
            {{--                                    >--}}
            {{--                                        <span class="pr-1 flex-1">Python</span>--}}
            {{--                                        <span class="mr-auto">--}}
            {{--              <svg--}}
            {{--                  class="fill-current h-4 w-4--}}
            {{--                transition duration-150 ease-in-out"--}}
            {{--                  xmlns="http://www.w3.org/2000/svg"--}}
            {{--                  viewBox="0 0 20 20"--}}
            {{--              >--}}
            {{--                <path--}}
            {{--                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"--}}
            {{--                />--}}
            {{--              </svg>--}}
            {{--            </span>--}}
            {{--                                    </button>--}}
            {{--                                    <ul--}}
            {{--                                        class="bg-white border rounded-sm absolute top-0 right-0--}}
            {{--      transition duration-150 ease-in-out origin-top-left--}}
            {{--      min-w-32--}}
            {{--      "--}}
            {{--                                    >--}}
            {{--                                        <li class="px-3 py-1 hover:bg-gray-100">2.7</li>--}}
            {{--                                        <li class="px-3 py-1 hover:bg-gray-100">3+</li>--}}
            {{--                                    </ul>--}}
            {{--                                </li>--}}
            {{--                                <li class="px-3 py-1 hover:bg-gray-100">Go</li>--}}
            {{--                                <li class="px-3 py-1 hover:bg-gray-100">Rust</li>--}}
            {{--                            </ul>--}}
            {{--                        </li>--}}
            {{--                        <li class="rounded-sm px-3 py-1 hover:bg-gray-100">Testing</li>--}}
            {{--                    </ul>--}}
            {{--                </div>--}}
            {{--            </li>--}}
        </ul>
    </div>
</div>
