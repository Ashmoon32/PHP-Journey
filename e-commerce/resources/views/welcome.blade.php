<!DOCTYPE html>
<html >
<head>
    <title>E-Shop</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Our Products</h1>

    @if($products->isEmpty())
        <p>No products yet. Let's add some later!</p>
    @else
        <table border="2" cellpadding="15">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>${{ $product->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>