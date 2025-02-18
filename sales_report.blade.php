<!DOCTYPE html>
<html>
<head>
    <title>Gadget Grads</title>
</head>
<body>
    <h2>Sales Report</h2>
    <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Order Date</th>
                <th>Total Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($salesData as $data)
                <tr>
                    <td>{{ $data['order_id'] }}</td>
                    <td>{{ $data['order_date'] }}</td>
                    <td>{{ $data['total_amount'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h3>Top-Selling Product</h3>
    <p>{{ $mostSellingProduct->product_name }} with {{ $mostSellingProduct->total_quantity }} units sold</p>
    <h3>Least-Selling Product</h3>
    <p>{{ $leastSellingProduct->product_name }} with {{ $leastSellingProduct->total_quantity }} units sold</p>
</body>
</html>
