<!DOCTYPE html>
<html>
<head>
    <title>Add New Product</title>
</head>
<body>
    <h1>Add New Product</h1>
    <form action="{{ route('addproduct') }}" method="POST">
        @csrf
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" required><br><br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>
        <label for="description">Quantity:</label>
        <textarea id="quantity" name="quantity" required></textarea><br><br>
        <label for="description">ImageId:</label>
        <textarea id="imgid" name="imgid" required></textarea><br><br>
        <button type="submit">Add Product</button>
    </form>
</body>
</html>