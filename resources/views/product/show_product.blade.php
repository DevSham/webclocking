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
                        <div class="flex justify-content-end card-header p-8">
                            <h4>
                                Part Number {{ $product->part_number ?? '' }}
                                Registered on {{ date('D d M Y, H:i:s', strtotime($product->created_at)) }}
                            </h4>
                            <a href="{{ url('product/'.$product->id . '/edit') }}" title="edit details for {{ $product->part_number ?? ''}}" data-tooltip-target="tooltip-no-arrow" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" > EDIT <i class="fas fa-pen text-light"></i> </a>
                        </div>
                        <br/>
                        <section class="bg-white dark:bg-gray-900">

                                <div class="container px-6 py-10 mx-auto">
                                    <h4 class="card-title text-uppercase">Biography</h4>
                                    <div class="flex">
                                        <div class="flex-1">
                                            <p>
                                                <b>Product Name</b>:
                                                <span>{{ $product->product_name ?? ''}}</span>
                                            </p>
                                        </div>
                                        <div class="flex-1">
                                            <p>
                                                <b>Part Number:</b>:
                                                <span>{{ $product->part_number ?? ''}}</span>
                                            </p>
                                        </div>
                                        <div class="flex-1">
                                            <p>
                                                <b>Pieces per box:</b>
                                                <span>{{ $product->piece_per_box ?? ''}}</span>
                                            </p>
                                        </div>

                                    </div>
                                    <div class="flex py-8">
                                        <div class="flex-1">
                                            <p>
                                                <b>Boxes per carton:</b>
                                                <span>{{ $product->boxes_per_carton ?? ''}}</span>
                                            </p>
                                        </div>
                                        <div class="flex-1">
                                            <p>
                                                <b>Category:</b>
                                                <span>{{ $product->category ?? ''}}</span>
                                            </p>
                                        </div>
                                        <div class="flex-1">
                                            <p>
                                                <b>Description:</b>
                                                <span>{{ $product->description ?? ''}}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

