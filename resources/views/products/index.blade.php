```html
<!DOCTYPE html>

<html>

<head>

    <title>Products</title>

</head>

<body>

    <h1>Product List</h1>

    <a href="/products/create">
        <button type="button">Add Product</button>
    </a>

    <br><br>

    <table border="1" cellpadding="10">

        <tr>

            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Action</th>

        </tr>

        @foreach ($products as $product)

            <tr>

                <td>{{ $product->id }}</td>

                <td>{{ $product->name }}</td>

                <td>RM {{ $product->price }}</td>

                <td>{{ $product->stock }}</td>

                <td>

                    <a href="/products/{{ $product->id }}/edit">
                        <button type="button">Edit</button>
                    </a>

                    <form method="POST" action="/products/{{ $product->id }}" style="display:inline;">

                        @csrf

                        @method('DELETE')

                        <button type="submit">Delete</button>

                    </form>

                </td>

            </tr>

        @endforeach

    </table>

</body>

</html>
```
