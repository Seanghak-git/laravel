<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $products = Product::paginate(10);
       return view("product.index", compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Category $categories)
    {
        $categories = $categories->all();
        return view("product.create", compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'name' => "required|string|max:100",
        'stock' => "required|integer|max:9999",
        'price' => 'required|numeric|min:0|max:9999.99',
        'category_id' => "required|exists:categories,id",
        'image'=> "nullable|image|mimes:jpg,jpeg,png,webp|max:2048",
        ]);
         if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('product', 'public');
         }
        Product::create($validated);
        return redirect()->route('product.index')->with('message', 'product create successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Product $product)
    {
        $categories = Category::all();
      
        return view('product.edit', compact( 'product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
       $validated = $request->validate([
        'name' => "required|string|max:100",
        'stock' => "required|integer|max:9999",
        'price' => 'required|numeric|min:0|max:9999.99',
        'category_id' => "required|exists:categories,id",
        'image'=> "nullable|image|mimes:jpg,jpeg,png,webp|max:2048",
        ]);
        if ($request->hasFile('image')) {
        if($product -> image && Storage::disk('public')->exists($product->image)){
            Storage::disk('public')->delete($product->image);
        }
            $validated['image'] = $request->file('image')->store('product', 'public');
         }
        $product->update($validated);
        return redirect()->route('product.index')->with('message', 'product update successfully!');
    } 
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('message', 'product delete successfully!');
    }
}
