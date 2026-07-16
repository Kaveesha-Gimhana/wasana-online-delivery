<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class ProductController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'product_code' => 'required|unique:products,product_code',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'price' => 'required|integer',
            'category' => 'required',
            'description' => 'required'
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(
            public_path('uploads/products'),
            $imageName
        );

        products::create([
            'product_code' => $request->product_code,
            'image' => $imageName,
            'price' => $request->price,
            'category' => $request->category,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Product Added Successfully');
    }
    public function index()
    {
        $products = products::all();
        return view('admin.product', compact('products'));
    }
    public function showAllProducts()
    {
        $products = products::all();
        return view('allProduct', compact('products'));
    }
    public function show($product_code)
    {
        $product = products::where('product_code', $product_code)->firstOrFail();

        return view('singalProdct', compact('product'));
    }
    public function destroy($product_code)
{
    $product = products::where('product_code', $product_code)->firstOrFail();

    if ($product->image && file_exists(public_path('uploads/products/' . $product->image))) {
        unlink(public_path('uploads/products/' . $product->image));
    }

    $product->delete();

    return redirect()->back()->with('success', 'Product deleted successfully');
}
public function edit($product_code){
    $product = products::where('product_code', $product_code)->firstOrFail();
    return view('controller-page.product-update', compact('product'));
}

public function update(Request $request, $product_code){
    $product = products::where('product_code', $product_code)->firstOrFail();

    $request->validate([
        'price' => 'required|integer',
        'category' => 'required',
        'description' => 'required',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
    ]);

    if ($request->hasFile('image')) {

        if ($product->image && file_exists(public_path('uploads/products/'.$product->image))) {
            unlink(public_path('uploads/products/'.$product->image));
        }

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(
            public_path('uploads/products'),
            $imageName
        );

        $product->image = $imageName;
    }

    $product->price = $request->price;
    $product->category = $request->category;
    $product->description = $request->description;

    $product->save();
    

    return redirect()->route('admin.product')
        ->with('success','Product Updated Successfully');
}

}
