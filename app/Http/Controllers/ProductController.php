<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    // TAMPILKAN SEMUA PRODUK
    public function index()
    {
        $products = Product::with('categories')->get();
        return view('admin.products.index', compact('products'));
    }

    // FORM TAMBAH PRODUK
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    // SIMPAN PRODUK
    public function store(Request $request)
    {
        $product = Product::create($request->all());

        // simpan relasi kategori
        $product->categories()->sync($request->categories);

        return redirect('/admin/products');
    }

    // FORM EDIT
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    // UPDATE PRODUK
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        $product->categories()->sync($request->categories);

        return redirect('/admin/products');
    }

    // HAPUS PRODUK
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/admin/products');
    }
}