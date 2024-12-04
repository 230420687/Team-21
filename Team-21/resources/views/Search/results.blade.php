<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Search results</title>
</head>
<body>
    <h1>Search Results for "{{$query}}"</h1>

    @if($products->isEmpty())
        <p>No products found matching your search criteria</p>
    @else
        <ul>
            @foreach($product as $products)
                <li>
                    <h2>{{$product->name}}</h2>
                    <h3>{{$product->price}}</h3>
                    <p>{{$product->description}}</p>
                    
                </li>
            @endforeach
        </ul>
    @endif
    
</body>
</html>