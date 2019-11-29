<?php

namespace App\Http\Controllers;

use App\Product;
use Validator;
use Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('product.list-all')->with('products', $products);
    }

    public function listJson()
    {
        $product = Product::all();
        return response()->json($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return string
     */
    public function views($id)
    {
        $product = Product::find($id);
        if(empty($product)){
            return "This is product don found";
        }
        return view('product.views-products')->with('p', $product);
    }

    public function news(ProductRequest $request)
    {
        Product::create($request->all());
        return redirect()
            ->action('ProductController@index')
            ->withInput(Request::input('name'));

    }
}
