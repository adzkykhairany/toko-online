<!-- resources/views/products/show.blade.php -->

<h1>Detail Produk</h1>

<p>ID: {{ $product->id }}</p>
<p>Nama Produk: {{ $product->nama_produk }}</p>
<p>Harga: {{ $product->harga }}</p>
<p>Stok: {{ $product->stok }}</p>

<a href="{{ route('products.index') }}">Kembali ke Daftar Produk</a>
