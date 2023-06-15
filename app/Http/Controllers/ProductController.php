<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create(Request $request)
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

        return response()->json(['message' => 'Produk berhasil dibuat'], 201);
    }

    public function getAll()
    {
        $products = Product::all();

        return response()->json($products);
    }

    public function getById($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }

        return response()->json($product);
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

        return response()->json(['message' => 'Produk berhasil diupdate']);
    }

    public function delete($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }

        $product->delete();

        return response()->json(['message' => 'Produk berhasil dihapus']);
    }

    public function getAvailable()
    {
        $products = Product::where('stok', '>', 0)->get();

        return response()->json($products);
    }

    public function getUnavailable()
    {
        $products = Product::where('stok', 0)->get();

        return response()->json($products);
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

        return response()->json(['message' => 'Stok produk berhasil diupdate']);
    }
}
