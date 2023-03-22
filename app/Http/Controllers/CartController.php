<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Category $category)
    {
        $products = Product::all();
        $categories = Category::all();
        $carts = Cart::all();
        return view('carts.index', compact('products', 'categories', 'carts'));
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
    public function store(Request $request)
    {
        $validated = $request->validate([
            "product_id" => 'required|exists:products,id',
        ]);

        if(Cart::where('product_id', '=', $validated['product_id'])->exists()){
            Cart::where('product_id', '=', $validated['product_id'])->increment('quantity');
        }
        else{
            $cart = Cart::create([
                "product_id" => $validated['product_id'],
                "quantity" => 1,
            ]);
        }

        return redirect(route('carts.index'))->with('message', 'Articolo <strong>'.$request->title.'</strong> aggiunto correttamente al carrello');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
