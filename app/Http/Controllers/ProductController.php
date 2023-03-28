<?php

namespace App\Http\Controllers;

use App\Models\Product;
use DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{

    public function index()
    {
        $data = Product::all();
        return view('product.index',['products'=>$data]);
    } 
    /**
     * Display a listing of the resource.
     */
    public function addProduct()
    {
        return view('product.addProduct');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function saveProduct(Request $request)
    {
        $validated=$request->validate([
            'productName'=>'required',
            'quantity'=>'required',
            'price'=>'required'
        ]);

        $product=Product::create($validated);

        return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editProduct($id){
        $data=Product::findorFail($id);
        return view('product.editProduct',['products'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
