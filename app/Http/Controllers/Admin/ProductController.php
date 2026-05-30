<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('hermit_purple.admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hermit_purple.admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // if ($request->stock_quantity === null || $request->stock_quantity === "" ){
        //     $dados['stock_quantity'] = 1;
        //     $dados['status'] = 1;
        // }else if ($request->stock_quantity === 0 || $request->stock_quantity === "0" ){
        //     $dados['stock_quantity'] = 0;
        //     $dados['status'] = 0;
        // }else if ($request->stock_quantity >= 1){
        //     $dados['status'] = 1;
        // }

        $dados = $request->validate([
        'name' => 'required|string|max:255',
        'category' => 'required|in:Flor,Buquê,Planta,Acessório',
        'description' => 'nullable|string|max:1000',
        'price' => 'required|numeric|min:0',
        'stock_quantity' => 'nullable|integer|min:0'
        ]);

        $dados['stock_quantity'] = $dados['stock_quantity'] ?? 1;
        $dados['status'] = $dados['stock_quantity'] > 0 ? 1 : 0;

        Product::create($dados);

        return redirect()->route('admin.products.index');

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
    public function edit(string $id)
    {
       $product = Product::findOrfail($id);
       return view("hermit_purple.admin.products.edit", compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:Flor,Buquê,Planta,Acessório',
            'description' => 'nullable|string|max:1000',
            'price' => 'required|numeric|min:0',
            'stock_quantity' => 'nullable|integer|min:0'
            ]);

            $dados['stock_quantity'] = $dados['stock_quantity'] ?? 1;
            $dados['status'] = $dados['stock_quantity'] > 0 ? 1 : 0;

        $product = Product::findOrfail($id);
        $product->update($dados);

        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrfail($id);
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
