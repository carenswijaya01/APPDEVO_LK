<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website LK | Dashboard Admin</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/trix.css">
  <script type="text/javascript" src="js/trix.js"></script>
</head>

<body>
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Dashboard </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100 " type="text" placeholder="Search" aria-label="Search">
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
              <a class="nav-link active" aria-current="page" href="admin-pengumuman">
                <span data-feather="file-text"></span>
                Pengumuman
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="admin-poin">
                <span data-feather="shopping-cart"></span>
                Input Poin
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="admin-kepanitiaan">
                <span data-feather="users"></span>
                Program Kepanitiaan
              </a>
          </ul>
        </div>
      </nav>
      <center>
        <h2 class="h2">Pengumuman</h2>
        <div class="container">
          <form action="">
            <div class="row">
              <div class="col-20">
                <label for="title">Judul</label>
              </div>
              <div class="col-75">
                <input type="text" id="fname" name="firstname" placeholder="Masukan Judul" required>
              </div>
            </div>
            <div class="row">
              <div class="col-20">
                <label for="author">Penulis</label>
              </div>
              <div class="col-75">
                <input type="text" name="author" placeholder="Nama Penulis" required>
              </div>
            </div>
            <div class="row">
              <div class="col-20">
                <label for="aras">Tanggal</label>
              </div>
              <div class="col-75">
                <input type="date" class="form-control" placeholder="tanggal upload">
              </div>
              <div class="row">
                <div class="col-20">
                  <label for="image">Gambar</label>
                </div>
                &nbsp;<div class="col-75">
                  <input type="file" accept="image/png, image/jpg" name="upload_file" class="form-control" id="upload_file" onchange="getImagePreview(event)">
                </div>
                <center>
                  <div id="preview">
                  </div>
                </center>
              </div>
              <div class="row">
                <div class="col-20">
                  <label for="Isi">Isi</label>
                </div>
                &nbsp;<div class="col-75">
                  <input id="Isi" placeholder="Masukan Isi" type="hidden" name="content">
                  <trix-editor input="Isi"></trix-editor>
                </div>
              </div>
      </center>
      </form>
    </div>
    <div class="button">
      <a href="admin-edit-pengumuman"><input type="submit" value="Simpan"></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>