<!-- resources/views/products/unavailable.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Produk Habis</title>
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

        .btn-kembali {
        display: inline-block;
        padding: 10px 20px;
        background-color: #337ab7;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    .btn-kembali:hover {
        background-color: #286090;
        border-color: #204d74;

    }
    </style>
</head>
<body>
    <h1>Produk Habis</h1>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $key => $product)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $product->nama_produk }}</td>
                    <td>{{ $product->harga }}</td>
                    <td>{{ $product->stok }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('products.index') }}" class="btn-kembali">Kembali</a>

</body>
</html>
