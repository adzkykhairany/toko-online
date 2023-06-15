<!-- resources/views/products/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th,
        table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            border: 1px solid transparent;
            border-radius: 4px;
            color: #fff;
            background-color: #337ab7;
            border-color: #2e6da4;
            text-decoration: none;
        }

        .btn-danger {
            background-color: #d9534f;
            border-color: #d43f3a;
        }

        .success-message {
            background-color: #dff0d8;
            color: #3c763d;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #d6e9c6;
            border-radius: 4px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input[type="number"] {
            width: 100px;
            padding: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .form-group button {
            padding: 5px 10px;
            border-radius: 4px;
            border: none;
            background-color: #337ab7;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Daftar Produk</h1>

    @if (session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('products.getAvailable') }}" class="btn">Tampilkan Produk Tersedia</a>
    <a href="{{ route('products.getUnavailable') }}" class="btn">Tampilkan Produk Habis</a>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $key => $product)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $product->nama_produk }}</td>
                    <td>{{ $product->harga }}</td>
                    <td>{{ $product->stok }}</td>
                    <td>
                        <a href="{{ route('products.getById', $product->id) }}" class="btn">Lihat</a>
                        <a href="{{ route('products.update', $product->id) }}" class="btn">Edit</a>
                        <form action="{{ route('products.delete', $product->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                        @if ($product->stok > 0)
                            <form action="{{ route('products.updateStock', $product->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="stock">Stok Baru:</label>
                                    <input type="number" name="stock" id="stock" required min="0">
                                    <button type="submit" class="btn">Update Stok</button>
                                </div>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('products.create') }}" class="btn">Tambah Produk</a>
</body>
</html>
