<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Website LK | Dashboard Admin </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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
      <link href="stylex.css" rel="stylesheet">
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
              <a class="nav-link active" aria-current="page" href="AdminPengumuman">
                  <span data-feather="file-text"></span>
                  Pengumuman
              </a>
              </li>
              <li class="nav-item">
              <a class="nav-link active" href="poin">
                  <span data-feather="shopping-cart"></span>
                  Input Poin 
              </a>
              </li>
              <li class="nav-item">
              <a class="nav-link active" href="Kepanitiaan">
                  <span data-feather="users"></span>
                  Program Kepanitiaan
              </a>
          </ul>
  </div>
  </nav>
        <div class="poin-content px-5 pt-3">
            <div class="poin-content px-3 pt-2">
              <div class="container">
                <h2 align="center">Input Poin (Admin)</h2>
                <form class=""      >
                    <div class="row">
                      <div class="col-20">
                        <label for="title">Nama Kegiatan</label>
                      </div>
                      <div class="col-75">
                        <input type="text" class="form-control" id="namaKegiatan" placeholder="Nama Kegiatan" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-20">
                        <label for="stPartisipan" class="form-label">Jenis Kegiatan</label>
                      </div>
                      <div class="col-75">
                        <select class="form-select" id="tipePoin">
                          <option value="">Choose...</option>
                          <option>OMB</option>
                          <option>Wawasan Almamater</option>
                          <option>Ketrampilan Profesional</option>
                          <option>Keterampilan Bersifat Kemanusiaan</option>
                          <option>Keterampilan Penunjang</option>
                      </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-20">
                        <label for="stPartisipan" class="form-label">Status Partisipan</label>
                      </div>
                      <div class="col-75">
                        <select class="form-select" id="tipePoin">
                          <option value="">Choose...</option>
                          <option>Lokal</option>
                          <option>Nasional</option>
                          <option>Internasional</option>
                      </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-20">
                        <label for="stPartisipan" class="form-label">Validasi</label>
                      </div>
                      <div class="col-75">
                        <select class="form-select" id="validasi">
                          <option value="">Choose...</option>
                          <option>Valid</option>
                          <option>Invalid</option>
                      </select>
                    </div>
                    <div class="row">
                      &nbsp;&nbsp;<div class="col-20">
                        <label for="stPartisipan" class="form-label">Poin</label>
                      </div>
                      <div class="col-75">
                        <input type="text" class="form-control" id="inputPoin" required> 
                    </div>
                    <!-- <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>  -->
                    <div class="button">
                    <input type="submit" value="Simpan">
                  </div>
              </div>
          </div>
        </div> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="script.js"></script>
  </body>
</html>

