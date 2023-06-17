<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Poppins;
        }

        h1 {
            margin-top: 20px;
            text-align: center;
        }

        .card {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            border-radius: 4px;
        }

        form {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        input[type="text"],
        input[type="number"] {
            padding: 6px 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
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
        
        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-top: 20px;
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

        .btn:hover {
            background-color: #286090;
            border-color: #204d74;
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

    <div class="card">
    <a href="{{ route('products.index') }}" class="btn">Kembali</a>
    <br>
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <table>
                <tr>
                    <th>Nama Produk</th>
                    <td>:</td>
                    <td><input type="text" name="nama_produk" value="{{ $product->nama_produk }}" required></td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <td>:</td>
                    <td><input type="number" name="harga" value="{{ $product->harga }}" required min="0"></td>
                </tr>
                <tr>
                    <th>Stok</th>
                    <td>:</td>
                    <td><input type="number" name="stok" value="{{ $product->stok }}" required min="0"></td>
                </tr>
            </table>
            <br>
            <div style="text-align: right;">
                <button type="submit" style="float: none;">Update</button>
            </div>
        </form>
    </div>
</body>
</html>
