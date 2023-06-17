<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk</title>
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
    <h1>Detail Produk</h1>

    <div class="card">
        <table>
            <tr>
                <th>ID</th>
                <td>{{ $product->id }}</td>
            </tr>
            <tr>
                <th>Nama Produk</th>
                <td>{{ $product->nama_produk }}</td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>{{ $product->harga }}</td>
            </tr>
            <tr>
                <th>Stok</th>
                <td>{{ $product->stok }}</td>
            </tr>
        </table>
        <a href="{{ route('products.index') }}" class="btn">Kembali</a>
    </div>
</body>
</html>
