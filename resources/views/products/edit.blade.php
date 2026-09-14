```html
<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>

    <h1>Edit Product</h1>

    <form method="POST" action="/products/{{ $product->id }}">

        @csrf
        @method('PUT')

        <label>Product Name:</label>
        <input type="text" name="name" value="{{ $product->name }}">

        <br><br>

        <label>Price:</label>
        <input type="number" name="price" step="0.01" value="{{ $product->price }}">

        <br><br>

        <label>Stock:</label>
        <input type="number" name="stock" value="{{ $product->stock }}">

        <br><br>

        <button type="submit">Update Product</button>

    </form>

</body>
</html>
```
