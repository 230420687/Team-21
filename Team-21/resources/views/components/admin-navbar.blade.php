<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Navbar</title>
  <link rel="stylesheet" href="{{asset('css/admin/admin-navbar.css')}}">
</head>

<body>
  <header id="main-header">
    <a href="{{ url('/home') }}"><img src="{{ asset('Images/logo.png') }}" alt="Gadget Grads Logo" class="logo" width="98" height="48"></a>
    <h1>GADGET GRADS</h1>
    <h2>Graduate with better tech!</h2>

    <div class="searchnav">
      <form action="{{ route('adminproductsearch') }}" method="GET">
        <input type="text" class="search-bar" name="query" placeholder="Search for products by name or description" required>
        <button class="search-button" type="submit">Search</button>
      </form>
    </div>

     <div class = "searchnav">
      <form action="{{route('adminsearch')}}" method="GET">
          <input type="text" class="search-bar" name="query" placeholder="Search for orders by id or status" required>
          <button class="search-button" type="submit">Search</button>
      </form>

      <div class ="searchnav" >
        <form method="GET" action="{{ route('adminsort.result') }}" class="mb-3">
            <label for="sort_by">Sort by:</label>
            <select name="sort_by" id="sort_by" class="form-control d-inline-block w-auto">
                <option value="order_id" {{ request('sort_by') == 'order_id' ? 'selected' : '' }}>Order ID</option>
                <option value="total_amount" {{ request('sort_by') == 'total_amount' ? 'selected' : '' }}>Price</option>
                <option value="order_status" {{ request('sort_by') == 'order_status' ? 'selected' : '' }}>Alphabetical (Order Status)</option>
            </select>

            <select name="sort_order" id="sort_order" class="form-control d-inline-block w-auto">
                <option value="asc" {{ request('sort_order') == 'asc' ? 'selected' : '' }}>Ascending</option>
                <option value="desc" {{ request('sort_order') == 'desc' ? 'selected' : '' }}>Descending</option>
            </select>

            <button type="submit" class="btn btn-primary">Sort</button>
        </form>
      </div>
</div>
  </header>

  <nav class="navigation">
    <ul>
      <li><a href="{{ url('/admin') }}">Admin Dashboard</a></li>
      <li><a href="{{ url('/adminproducts') }}">Products</a></li>
      <li><a href="{{ url('/adminorders') }}">Orders</a></li>
      <li><a href="{{ url('/sales-report') }}">Reports</a></li>
      <li><a href="{{ url('/supplier-orders')}}">Supplier Orders</a></li>
      <li><a href="{{ url('/adminusers') }}">Manage Customers</a></li>
      <li><a href="{{ url('/logout') }}">Logout</a></li>
    </ul>
  </nav>
</body>

</html>