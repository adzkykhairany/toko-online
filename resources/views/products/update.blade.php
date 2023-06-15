<!-- resources/views/products/edit.blade.php -->

<h1>Edit Produk</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nama_produk">Nama Produk:</label>
    <input type="text" name="nama_produk" id="nama_produk" value="{{ $product->nama_produk }}" required>

    <label for="harga">Harga:</label>
    <input type="number" name="harga" id="harga" value="{{ $product->harga }}" required min="0">

    <label for="stok">Stok:</label>
    <input type="number" name="stok" id="stok" value="{{ $product->stok }}" required min="0">

    <button type="submit">Update</button>
</form>
