<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body data-bs-theme="dark">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
          <a class="navbar-brand" href="#">StoreKeeper</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('dashboard.index') }}">Dashboard</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('products') }}">Prodcut List</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('products.create') }}">Add Product</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('sales.index') }}">Sale History</a>
                  </li>
              </ul>
          </div>
      </div>
    </nav>
   
    <h2 class="my-4">Sales History</h2>

    
    
    <table class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Order Quantity</th>
                <th>Price</th>
                <th>Total Amount</th>
                <th>Transaction Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $item)
                <tr>
                    <td>{{ $item->product_id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->total_quantity }}</td>
                    <td>{{ $item->total_amount }}</td>
                    <td>{{ $item->total_amount * $item->total_quantity}}</td>
                    <td>{{ $item->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    


  </div>

  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>