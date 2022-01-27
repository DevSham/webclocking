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
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">List Of  all products </h4>
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-green-700">
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">#</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Part Number</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Product Name</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Category</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Piece per bix</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Boxes per carton</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Deccription</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Action</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Delete</th>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        <?php $n=1; ?>
                                        @foreach($product as $products)
                                            <tr>
                                                <td class = "px-6 py-4 whitespace-nowrap">{{ $n++}}</td>
                                                <td class = "px-6 py-4 whitespace-nowrap">{{ $products->part_number}}</td>
                                                <td class = "px-6 py-4 whitespace-nowrap">{{ $products->product_name}}</td>
                                                <td class = "px-6 py-4 whitespace-nowrap">{{ $products->category }}</td>
                                                <td class = "px-6 py-4 whitespace-nowrap">{{ $products->piece_per_box }}</td>
                                                <td class = "px-6 py-4 whitespace-nowrap">{{ $products->boxes_per_carton }}</td>
                                                <td class = "px-6 py-4 whitespace-nowrap">{{ $products->description }}</td>
                                                <td class = "px-6 py-4 whitespace-nowrap">
                                                    <a href="/shares_transfer/{{ $products->id }}/edit" class="btn btn-primary">Edit</a>
                                                </td>
                                                <td class = "px-6 py-4 whitespace-nowrap">
                                                    <form action="/product/{{ $products->id }}" method="POST">
                                                        {{method_field('DELETE')}}
                                                        {{ csrf_field() }}
                                                        <input type="submit" class="btn btn-danger" value="Delete"/>
                                                    </form><a href="/product/{{ $products->id }}/delete"></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                <div class="flex">
                                    <div class="flex-1 justify-end">
                                        {{ $product->links('pagination::tailwind') }}
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
