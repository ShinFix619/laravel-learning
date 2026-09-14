<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>

    <h1>Create Product</h1>

    <form method="POST" action="/products">

        @csrf

        <label>Product Name:</label>
        <input type="text" name="name">

        <br><br>

        <label>Price:</label>
        <input type="number" name="price" step="0.01">

        <br><br>

        <label>Stock:</label>
        <input type="number" name="stock">

        <br><br>

        <button type="submit">Create Product</button>

    </form>

</body>
</html>