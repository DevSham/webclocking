<x-app-layout>
    <div class="py-12">
        <x-slot name="header" class="fixed insect-x-0">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight px-20">
                {{ __('Category') }}
            </h2>
        </x-slot>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200">
                    @include('layouts.partials.system._page_navigation')
                    <div class="flex justify-center items-center w-70">

                        <div class="w-full bg-white rounded shadow-2xl p-8 m-4">
                            @include('layouts.partials.system._message')

                            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase text-center">
                                Category Information
                            </h6>
                            <form method="POST" action="{{ url('category') }}">
                                @csrf
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                Category Name
                                            </label>
                                            <input type="text" name="product_name" class="border-1 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" required>
                                        </div>
                                        <input type="submit" class="p-4 placeholder-blueGray-300 text-white bg-blue-500 rounded text-sm shadow focus:outline-none focus:ring w-1/2 ease-linear transition-all duration-150" value="Save Category">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



