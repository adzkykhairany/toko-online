<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required|string',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
        ]);

        $product = new Product;
        $product->nama_produk = $validatedData['nama_produk'];
        $product->harga = $validatedData['harga'];
        $product->stok = $validatedData['stok'];
        $product->save();

        return redirect()->route('products.index')->with('success', 'Produk berhasil dibuat');
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required|string',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
        ]);

        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }

        $product->nama_produk = $validatedData['nama_produk'];
        $product->harga = $validatedData['harga'];
        $product->stok = $validatedData['stok'];
        $product->save();

        return redirect()->route('products.index')->with('success', 'Produk berhasil diupdate');
    }

    public function delete($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus');
    }

    public function getAvailable()
    {
    $products = Product::where('stok', '>', 0)->get();
    if ($products->isEmpty()) {
        return response()->json(['message' => 'Produk tidak ditemukan'], 404);
    }
    return view('products.available', compact('products'));
    }

    public function getUnavailable()
    {
        $products = Product::where('stok', 0)->get();
    
        return view('products.unavailable', compact('products'));
    }
    


    public function updateStock(Request $request, $id)
    {
        $validatedData = $request->validate([
            'stock' => 'required|integer|min:0',
        ]);

        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }

        $product->stok = $validatedData['stock'];
        $product->save();

        return redirect()->route('products.index')->with('success', 'Stok produk berhasil diupdate');
    }
}