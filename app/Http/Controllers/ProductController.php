<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
  public function search(Request $request)
  {
    // Validate the input directly on the request object
    $validated = $request->validate([
      "search" => "required",
    ]);
    
    // Get the validated search query
    $search = $validated['search'];

    // Fetch the products matching the search query
    $products = Product::where("name", "like", "%" . $search . "%")->get();

    // Return the view with the products
    return view("products.index", ["products" => $products]);
  }
  /**
   * Display a listing of the resource.
   */
  public function index(Request $request)
  {
    $user = $request->user();
    Log::info($user->id);
    return view("products.index", ["products" => Product::all()]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view("products.create");
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      "name" => "required|max:100|min:10",
      "price" => "numeric",
    ]);

    Product::create($request->input());
    return redirect("/");
  }

  /**
   * Display the specified resource.
   */
  public function show(Product $product)
  {
    return view("products.show", ["product" => $product]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Product $product)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Product $product)
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
