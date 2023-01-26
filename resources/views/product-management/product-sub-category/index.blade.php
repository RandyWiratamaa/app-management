<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Sub Category</title>
</head>
<body>
    <a href="{{ route('product-sub-category.add') }}" role="button">
        Add Data
    </a>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>is Active</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jsonData['data'] as $val)
            <tr>
                <td>{{ $val['name'] }}</td>
                <td>{{ $val['description'] }}</td>
                <td>
                    @if ($val['is_active'] == 1)
                    Aktif
                    @else
                    Non-Aktif
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
