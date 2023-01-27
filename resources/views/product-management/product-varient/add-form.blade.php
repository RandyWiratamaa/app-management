


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Product Varient</title>
</head>
<body>
    <h3>Add New Product Varient</h3>
    <a href="{{ route('product-varient.index') }}">
        List
    </a>

    <form action="{{ route('product-varient.store') }}">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name">
        <br>
        <label for="">Description</label>
        <input type="text" name="description">
        <br>
        <input type="submit" value="Save">
    </form>
</body>
</html>
