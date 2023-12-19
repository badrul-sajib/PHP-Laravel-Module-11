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
   
    <h2 class="my-4">Dashboard</h2>

    <div class="row">
        <div class="col-md-3">
            <div class="card shadow-lg p-2 mb-5 bg-body rounded">
                <div class="card-body text-center">
                    <h5 class="card-title h4">Today's Sales</h5>
                    <p class="card-text display-6">{{ $today }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-lg p-2 mb-5 bg-body rounded">
                <div class="card-body text-center">
                    <h5 class="card-title h4">Yesterday's Sales</h5>
                    <p class="card-text display-6">{{ $yesterday }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-lg p-2 mb-5 bg-body rounded">
                <div class="card-body text-center">
                    <h5 class="card-title h4">This Month's Sales</h5>
                    <p class="card-text display-6">{{ $thisMonth }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-lg p-2 mb-5 bg-body rounded">
                <div class="card-body text-center">
                    <h5 class="card-title h4">Last Month's Sales</h5>
                    <p class="card-text display-6">{{ $lastMonth }}</p>
                </div>
            </div>
        </div>
    </div>

    


  </div>

  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>