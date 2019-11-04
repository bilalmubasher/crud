
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
</head>
<body>
    <h1>Add Product</h1>
    <form action="{{route('product.store')}}" method="POST">
        @csrf
        <label for="name">Enter name of product:</label>
        <input type="text" name="name" placeholder="product name">
        <br>
        <br>
        <label for="details">Enter details of product: </label>
        <input type="text" name="details" placeholder="details">
        <br>
        <input type="submit" value="Save your product">
    </form>
</body>
</html>