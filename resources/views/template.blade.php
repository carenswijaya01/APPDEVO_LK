<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>{{ config('app.name') }}</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">



<!-- Custom styles for this template -->
<link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">{{ config('app.name') }}</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <button type="submit" class="btn btn-outline-light">logout</button>
        </a>
        <form action="{{ route('admin.logout') }}" id="logout-form" method="post">
          @csrf
        </form>
      </div>

  </div>
</header>
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            @guest("admin")
              @else
              @can('role','admin')
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('pengumuman.index') }}">
                  <span data-feather="home"></span>
                  Pengumuman
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('daftarKegiatan') }}">
                  <span data-feather="home"></span>
                  Daftar Kegiatan
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('points.index') }}">
                  <span data-feather="home"></span>
                  Poin
                </a>
              </li>
              @endcan

              {{-- Super admin --}}
              @can('role','superadmin')
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('type-point.index') }}">
                  <span data-feather="home"></span>
                  Tipe Poin
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('admin.index') }}">
                  <span data-feather="home"></span>
                  Admin
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('proposal.index') }}">
                  <span data-feather="home"></span>
                  Kegiatan
                </a>
              </li>
              @endcan

              {{-- kegiatan --}}
              @can('role','event')
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="">
                  <span data-feather="home"></span>
                  Menu untuk kegatan
                </a>
              </li>
              @endcan
         @endguest
        </div>
    </nav>
    <div class="container ">
        @yield('content')
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="/js/dashboard.js"></script>
</body>
</html>
