<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Sub Category</title>
</head>
<body>
    <h3>Add New Product Sub Category</h3>
    <a href="{{ route('product-sub-category.index') }}">
        List
    </a>

    <form action="{{ route('product-sub-category.store') }}">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name">
        <br>
        <label for="">Product Category</label>
        <select name="product_category">
            @foreach ($product_category_json['data'] as $data)
            <option value="{{ $data['id'] }}">{{ $data['name'] }}</option>
            @endforeach
        </select>
        <br>
        <label for="">Description</label>
        <input type="text" name="description">
        <br>
        <input type="submit" value="Save">
    </form>
</body>
</html>
