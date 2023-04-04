<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">


    <title>Document</title>
</head>
<body>



          <div class="container">
            <nav class="navbar">
              <a href="#" class="navbar-brand"><img  width="100"  src="{{ asset('logo.png') }}" alt="Logo" />
              </a>
              <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
              </button>
            </nav>
            <div class="row">
              <aside class="sidebar col-md-3">
                <ul class="nav flex-column ">
                  {{--  <li class="nav-item ">
                    <a class="nav-link" href="{{ url('/dashboard') }}"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                  </li>  --}}
                  <li class="nav-item">
                    <li><a class="nav-link" href="{{ url('dashboard/users') }}"><i class="fas fa-users"></i>Users</a></li>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('dashboard/products') }}"><i class="fas fa-shopping-cart"></i>Products</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-file-invoice"></i>Orders</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('dashboard/categories') }}"><i class="fas fa-file-invoice"></i>Categories</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-cog"></i>Settings</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('logout') }}" class="logout-link"><i class="fas fa-sign-out-alt"></i>Logout</a>
                  </li>
                </ul>
              </aside>
              <main class="col-md-9">



                @yield('content')

              </main>
            </div>
          </div>







<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
