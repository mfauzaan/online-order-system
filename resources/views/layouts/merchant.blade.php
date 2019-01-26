<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Online Order System">

  <title>Online Order System</title> 

  <!-- Favicons -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon.png">
  <link rel="icon" type="image/png" href="/img/favicon.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/img/favicon.png" sizes="16x16">
  <link rel="mask-icon" href="/img/oos-logo-white.svg" color="#5bbad5">
  <meta name="theme-color" content="#ffffff">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="/css/argon.css" rel="stylesheet">
  <!-- Docs CSS -->
  <link type="text/css" href="/css/docs.min.css" rel="stylesheet">
</head>
<body class="{{ request()->is('login/*') ? '' : 'bg-secondary' }}">
  @auth
  <header class="navbar navbar-expand navbar-dark bg-default flex-row align-items-md-center ct-navbar">
    <div class="container-fluid">
      <a class="navbar-brand mr-0 mr-md-2" href="/">
        <img src="/img/oos-logo-white.svg">
        <sup>Admin</sup>
      </a>
      <div class="d-none d-sm-block ml-auto">
        <ul class="navbar-nav ml-lg-auto">
          <li class="nav-item dropdown">
              <a class="nav-link nav-link-icon" href="{{ route('logout') }}" 
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                <i class="ni ni-button-power"></i>
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </li>
        </ul>
      </div>
      <button class="navbar-toggler ct-search-docs-toggle d-block d-md-none ml-auto ml-sm-0 collapsed" type="button"
        data-toggle="collapse" data-target="#ct-docs-nav" aria-controls="ct-docs-nav" aria-expanded="false" aria-label="Toggle docs navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    </div>
  </header>
  @endauth

  @section('main-container')
  <div class="container-fluid">
      <div class="row flex-xl-nowrap">
        @auth
        <div class="col-12 col-md-3 col-xl-2 ct-sidebar">
          <nav class="collapse ct-links" id="ct-docs-nav">
            <!-- Show links for all groups -->
            <div class="ct-toc-item active">
              <ul class="nav ct-sidenav">
                  <li class="ct-sidenav-active {{ Request::is('merchant/dashboard*') ? 'active' : '' }}"><a href="/merchant/dashboard">Dashboard</a></li>
              </ul>
            </div>
  
            <!-- Show links for all groups -->
            <div class="ct-toc-item active">
              <a class="ct-toc-link">Managment</a>
              <ul class="nav ct-sidenav ">
                @if (auth()->user()->type == 'Admin')
                  <li class="ct-sidenav-active {{ Request::is('admin/merchants*') ? 'active' : '' }}"><a href="/admin/merchants">Merchants</a></li>
                @else
                <li class="ct-sidenav-active {{ Request::is('merchant/orders*') ? 'active' : '' }}"><a href="{{ route('orders.index') }}">Orders</a></li>
                <li class="ct-sidenav-active {{ Request::is('merchant/items*') ? 'active' : '' }}"><a href="{{ route('items.index') }}">Items</a></li>
                <li class="ct-sidenav-active {{ Request::is('merchant/customers*') ? 'active' : '' }}"><a href="{{ route('customers.index') }}">Customers</a></li>
                @endif
              </ul>
            </div>
          </nav>
        </div>
        @endauth
  
        <main class="col-12 col-md-9 col-lg-10 py-md-3 pl-md-5 pr-md-5 ct-content" role="main">
          @yield('content')
        </main>
      </div>
    </div>
@show

  <!-- Core -->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/popper/popper.min.js"></script>
  <script src="/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="/vendor/headroom/headroom.min.js"></script>
  <!-- Optional JS -->
  <script src="/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="/vendor/chart.js/dist/Chart.extension.js"></script>
  <script src="/vendor/onscreen/onscreen.min.js"></script>
  <script src="/vendor/nouislider/js/nouislider.min.js"></script>
  <script src="/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <!-- Argon JS -->
  <script src="/js/argon.js?v=1.0.1"></script>
  <script src="/js/oos.js"></script>
</body>

</html>