<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <style>
        .table,.table__col{border: 1px solid black;border-collapse: collapse;}
        .table__col{padding: 5px}
    </style>
</head>
<body>
    <table class="table">
        @foreach ($products as $product)
            <tr class="table__row">
                <td class="table__col">{{ $product->productCode }}</td>
                <td class="table__col">{{ $product->productName }}</td>
                <td class="table__col">{{ $product->productLine }}</td>
                <td class="table__col">{{ $product->productScale }}</td>
                <td class="table__col">{{ $product->productVendor }}</td>
                <td class="table__col">{{ $product->productDescription }}</td>
                <td class="table__col">{{ $product->quantityInStock }}</td>
                <td class="table__col">{{ $product->buyPrice }}</td>
                <td class="table__col">{{ $product->MSRP }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>