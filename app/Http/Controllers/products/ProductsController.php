<?php

namespace App\Http\Controllers\products;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = 'All Products';
        $product = Product::paginate(15);
        $pageNavigation = ['Products'];
        $pageDescription = 'This is all products of the product';

        return view('product.all_products', compact('pageTitle', 'pageDescription', 'product', 'pageNavigation'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = 'Product';
        $pageDescription = 'This is the registration of the product';
        $pageNavigation = ['Products'];
        return view('product.product_layout', compact('pageTitle', 'pageDescription', 'pageNavigation'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $get_product = new Product($request->all());
        $save_product = $get_product->save();
        if(!$save_product){
            session()->flash('message','Product NOT Registered');
            return redirect()->back();
        }else{
            return redirect()->route('product.show', [ $get_product->id])
                ->withInput()
                ->with('success', 'Product Registered Succcessfully');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $pageTitle = ("Product Number ".$product->part_number);
        $pageNavigation = ['Products'];
        $pageDescription = 'This is the product of the product';

        return view('product.show_product', compact('pageTitle', 'pageDescription', 'product', 'pageNavigation'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
