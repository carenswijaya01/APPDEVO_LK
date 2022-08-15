<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Website LK | Dashboard Admin</title>
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
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/trix.css">
  <script type="text/javascript" src="js/trix.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>
  
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">LK - Admin </a>
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
              <a class="nav-link " aria-current="page" href="admin-edit-pengumuman">
                <span data-feather="file-text"></span>
                Pengumuman
              </a>
              <hr class="bg-primary">
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="admin-poin">
                <span data-feather="shopping-cart"></span>
                Input Poin
              </a>
              <hr class="bg-primary">
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin-list-kepanitiaan">
                <span data-feather="users"></span>
                Program Kepanitiaan
              </a>
              <hr class="bg-primary">
            </li>
            <li class="nav-item">
              <a class="nav-link " href="admin-validasi">
                <span data-feather="user-check"></span>
                Validasi Kepanitiaan
              </a>
              <hr class="bg-primary">
            </li>
          </ul>
        </div>
      </nav>
      <div class="container-fluid py-5">
        <div class="container table-responsive px-2 pt-3 sm-6">
          <h2 text align="center">Input Poin</h2>
          <table class="table table-striped text-center table-bordered border-dark table table-hover">
            <thead class="table-primary table-bordered border-dark">
            <tr class="tab">
            <th class=""><button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal" id="tambahData"><i class="far fa-plus"></i></button>
            </th>
          </tr>
              <tr>
                <th>No.</th>
                <th>Jenis Kegiatan</th>
                <th>Status Partisipan</th>
                <th>Valid</th>
                <th>Poin</th>
                <th> Sertifikat</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Keterampilan Professional</td>
                <td>Anggota</td>
                <td>Valid</td>
                <td>100</td>
                <td><a href="https://drive.google.com/file/d/1xyBgHecK4xcbd7etkDHoqw1pfMIKyGuu/view" target="_blank"><span data-feather="eye"></span></th></a>
                <td> <button type="button" class="btn btn-sm btn-outline-dark">&nbsp;Edit</button>
                  <button onclick="myFunction()" type="button" class="btn btn-sm btn-outline-dark">&nbsp;Hapus</button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Keterampilan Professional</td>
                <td>Anggota</td>
                <td>Valid</td>
                <td>100</td>
                <td><a href="https://drive.google.com/file/d/1xyBgHecK4xcbd7etkDHoqw1pfMIKyGuu/view" target="_blank"><span data-feather="eye"></span></td></a>
                <td> <button type="button" class="btn btn-sm btn-outline-dark">&nbsp;Edit</button>
                  <button onclick="myFunction()" type="button" class="btn btn-sm btn-outline-dark">&nbsp;Hapus</button>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Keterampilan Professional</td>
                <td>Anggota</td>
                <td>Valid</td>
                <td>100</td>
                <td><a href="https://drive.google.com/file/d/1xyBgHecK4xcbd7etkDHoqw1pfMIKyGuu/view" target="_blank"><span data-feather="eye"></span></td></a>
                <td> <button type="button" class="btn btn-sm btn-outline-dark">&nbsp;Edit</button>
                  <button onclick="myFunction()" type="button" class="btn btn-sm btn-outline-dark">&nbsp;Hapus</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
      <div class="container mt-5">
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Input Poin</h5>
                        <button type="button" class="btn-close btn btn-light" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Kegiatan:</label>
                                <input type="text" placeholder="Nama Kegiatan" id="namaKegiatan" class="form-control" required/>
                            </div>
                            <div class="class mb-3">
                                <label for="tipePoin" class="form-label">Tipe Poin</label>
                                <select class="form-select" id="tipePoin">
                                    <option value="">Choose...</option>
                                    <option>OMB</option>
                                    <option>Wawasan Almamater</option>
                                    <option>Ketrampilan Profesional</option>
                                    <option>Keterampilan Bersifat Kemanusiaan</option>
                                    <option>Keterampilan Penunjang</option>
                                </select> 
                            </div>
                            <div class="class mb-3">
                                <label for="jenisKegiatan" class="form-label">Jenis Kegiatan</label>
                                <select class="form-select" id="jenisKegiatan">
                                    <option value="">Choose...</option>
                                    <option>Lokal</option>
                                    <option>Nasional</option>
                                    <option>Internasional</option>
                                </select>
                            </div>
                            <div class="class mb-3">
                            <label for="statusPartisipan" class="form-label">Status Partisipan</label>
                                <select class="form-select" id="statusPartisipan">
                                    <option value="">Choose...</option>
                                    <option>Peserta</option>
                                    <option>Panitia</option>
                                    <option>Ketua Panitia</option>
                                </select>
                            </div>
                            <div class="class mb-3">
                            <label for="validasi" class="form-label">Validasi</label>
                                <select class="form-select" id="validasi">
                                    <option value="">Choose...</option>
                                    <option>Valid</option>
                                    <option>Invalid</option>
                                </select>                                
                            </div>
                            <div class="class mb-3">
                                <label for="Isi">Sertifikat</label>
                                <input id="sertifikat" placeholder="Masukan Isi" type="hidden" name="content" required>
                                <trix-editor input="sertifikat"></trix-editor>
                            </div>
                            <div class="class mb-3">
                                <label for="poin" class="form-label">Poin</label>
                                <input type="number" class="form-control" id="inputPoin" required>
                            </div>
                        </form>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-dark">Simpan</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
