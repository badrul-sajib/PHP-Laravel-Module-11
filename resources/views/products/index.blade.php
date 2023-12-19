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

    @if(session('success'))
    <p class="text-success">{{session('success')}}</p>
    @endif

    <h2 class="mb-3 mt-5">Product List</h2>
    <table class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th scope="col">Serial No</th>
                <th scope="col">Product Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Product Price</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a class="btn btn-success" href="{{ route('products.sell',$product->id) }}">Sell</a>
                    <a class="btn btn-warning" href="{{ route('products.edit',$product->id) }}">Edit</a>
                    <form action="{{ route('product.destroy',$product->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>


  </div>

  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>