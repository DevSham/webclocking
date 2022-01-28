<x-app-layout>

    <x-slot name="header" class="fixed insect-x-0">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight px-20">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-20 bg-white border-b border-gray-200">
                    @include('layouts.partials.system._page_navigation')
                    @include('layouts.partials.system._message')
                    <div class="">
                        <div class="flex">
                            <div class="flex-1 justify-end border border-green-400 text-white-400 p-2 relative w-5/10 text-right divide-x-4">
                                <b class="text-green-700">Part Number: <span class="p-2 text-blue-400">{{ $product->part_number ?? '' }}</span></b>
                                &nbsp
                                <b class="text-green-700 p-2">Registered on: <span class="text-blue-400">{{ date('D d M Y, H:i:s', strtotime($product->created_at)) }}</span></b>
                                &nbsp
                                <a href="{{ url('product/'.$product->id . '/edit') }}" title="edit details for {{ $product->part_number ?? ''}}" data-tooltip-target="tooltip-no-arrow" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" > EDIT <i class="fas fa-pen text-light"></i> </a>
                            </div>
                        </div>

                        <br/>
                        <div class="bg-white dark:bg-gray-900 flex">

                                <div class="flex-1 justify-center container px-6 py-10 mx-auto items-center">
                                    <table class="">
                                        <tbody>
                                        <tr>
                                            <td class="p-2 text-left text-lg">
                                                <b>Product Name</b>
                                            </td>
                                            <td class="px-8">
                                                {{ $product->product_name ?? ''}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-2 text-left text-lg">
                                                <b>Part Number</b>
                                            </td>
                                            <td class="px-8">
                                                {{ $product->part_number ?? ''}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-2 text-left text-lg">
                                                <b>Pieces per box</b>
                                            </td>
                                            <td class="px-8">
                                                {{ $product->piece_per_box ?? ''}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-2 text-left text-lg">
                                                <b>Boxes per carton</b>
                                            </td>
                                            <td class="px-8">
                                                {{ $product->boxes_per_carton ?? ''}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-2 text-left text-lg">
                                                <b>Category</b>
                                            </td>
                                            <td class="px-8">
                                                {{ $product->category ?? ''}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-2 text-left text-lg">
                                                <b>Description</b>
                                            </td>
                                            <td class="px-8">
                                                {{ $product->description ?? ''}}
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

