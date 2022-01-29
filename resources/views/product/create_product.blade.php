<x-app-layout>
    <div class="py-12">
        <x-slot name="header" class="fixed insect-x-0">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight px-20">
                {{ __('Product') }}
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
                            Product Information
                        </h6>
                        <form method="POST" action="{{ url('product') }}">
                            @csrf
                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Product Name
                                        </label>
                                        <input type="text" name="product_name" class="border-1 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" required>
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Part Number
                                        </label>
                                        <input type="text" name="part_number" class="border-1 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" required>
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Pieces per box
                                        </label>
                                        <input type="number" name="piece_per_box" class="border-1 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" required>
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Boxes per carton
                                        </label>
                                        <input type="number" name="boxes_per_carton" class="border-1 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" required>
                                    </div>
                                </div>
                            </div>
                            </h6>
                            <div class="flex-wrap">
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Category
                                        </label>
                                        <input type="text" name="category" class="border-1 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" required>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Description
                                        </label>
                                        <textarea type="text" name="description" class="border-1 px-3 py-3 placeholder-red-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4 ">
                                    <div class="flex-1 text-center relative w-full mb-3">
                                        <input type="submit" class="p-4 placeholder-blueGray-300 text-white bg-blue-500 rounded text-sm shadow focus:outline-none focus:ring w-1/2 ease-linear transition-all duration-150">
                                    </div>
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



