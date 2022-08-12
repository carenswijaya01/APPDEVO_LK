<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard Template · Bootstrap v5.0</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">


    
<!-- Custom styles for this template -->
<link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">LK - Super Admin</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Log out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Poin
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="lk-adminlist">
              <span data-feather="users"></span>
              Admin
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="lk-tambahadmin">
              <span data-feather="users"></span>
              Tambah Admin
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="lk-superadmin">
              <span data-feather="users"></span>
              Request Admin
            </a>
          </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Data</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Anggota LK
            </a>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="container mt-3">
        <center><h1>Poin</h1></center>
        <table class="table">
          <thead class="table-dark">
            <tr>
              <th>Limit</th>
              <th>Tipe Poin</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="number"class="form-control" id="limit" placeholder="0"></td>
              <td> <form action="/action_page.php">
                    <select class="form-select" id="tipepoin" name="sellist1">
                    <option>OMB</option>
                    <option>Ketrampilan Profesional</option>
                    <option>Keterampilan Bersifat Kemanusiaan</option>
                    <option>Keterampilan Penunjang</option>
                  </select>
                </form>
              </div></td>
              <td><button type="button" class="btn btn-dark">Tambah</button></td>
            </tr>
          </tbody>
        </table>
        <br>
        <table class="table">
          <thead class="table-dark">
            <tr>
              <th>Limit</th>
              <th>Tipe Poin</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2000</td>
              <td>Ketrampilan Profesional</td>
              <td><div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">&nbsp;Edit&nbsp;</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">&nbsp;Hapus</button>
              </div></td>
            </tr>
            <tr>
              <td>1000</td>
              <td>Keterampilan Bersifat Kemanusiaan</td>
              <td><div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">&nbsp;Edit&nbsp;</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">&nbsp;Hapus</button>
              </div></td>
            </tr>
            <tr>
              <td>1500</td>
              <td>Keterampilan Penunjang</td>
              <td><div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">&nbsp;Edit&nbsp;</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">&nbsp;Hapus</button>
              </div></td>
            </tr>
          </tbody>
        </table>
      </main>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="/js/dashboard.js"></script>
 </body>
</html>
