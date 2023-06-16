<!-- resources/views/products/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            margin-top: 20px;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"] {
            padding: 6px 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            padding: 6px 12px;
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

        button[type="submit"]:hover {
            background-color: #286090;
            border-color: #204d74;
        }

        .alert {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #d9534f;
            border-radius: 4px;
            color: #d9534f;
            background-color: #f2dede;
        }

        .alert ul {
            list-style: none;
            padding-left: 0;
        }

        .alert li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h1>Edit Produk</h1>

    @if ($errors->any())
        <div class="alert">
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
</body>
</html>
