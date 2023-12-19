<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product List</title>
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

    @if( session('success') ) 
    <p class="text-success">{{ session('success') }}</p>
    @endif
    <h2 class="mt-5 mb-4">Create a New Product</h2>
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="productName" name="name" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>


  </div>

  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>