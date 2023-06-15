<!-- resources/views/products/create.blade.php -->

<h1>Tambah Produk Baru</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label for="nama_produk">Nama Produk:</label>
    <input type="text" name="nama_produk" id="nama_produk" required>

    <label for="harga">Harga:</label>
    <input type="number" name="harga" id="harga" required min="0">

    <label for="stok">Stok:</label>
    <input type="number" name="stok" id="stok" required min="0">

    <button type="submit">Simpan</button>
</form>
