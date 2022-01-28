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
        $product = Product::paginate(9);
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
        $pageNavigation = ['New Product'];
        return view('product.create_product', compact('pageTitle', 'pageDescription', 'pageNavigation'));

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
        $product = Product::find($id);
        $pageTitle = ("Edit Product Number ".$product->part_number);
        $pageNavigation = ['Products'];
        $pageDescription = 'This is the edit product page';

        return view('product.edit_product', compact('pageTitle', 'pageDescription', 'product', 'pageNavigation'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $product = Product::find($id);
        $update_product = $product->update($request->all());
//        $update_product = $product->update($request->except('part_number'));
        if(!$update_product){
            return redirect()
                ->back()->with('failure', 'Failed to update product details. Please try again.');
        }
        return redirect()
            ->back()->with('success', 'Product details updated successfully');
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
