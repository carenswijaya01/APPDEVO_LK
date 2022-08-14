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
                            <a class="nav-link" href="admin-poin">
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
                            <a class="nav-link active" href="admin-validasi">
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
                    <h2 text align="center">Validasi Pendaftar Anggota Kegiatan Kepanitiaan</h2>
                    <table class="table table-striped text-center table-bordered border-dark table table-hover">
                        <thead class="table-primary table-bordered border-dark">
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Email</th>
                                <th>Kegiatan</th>
                                <th>Alasan</th>
                                <th>File</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="options" id="option1" autocomplete="off" checked> Terima

                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="options" id="option2" autocomplete="off" checked> Tolak

                                        </label>

                                    </div>
                                </th>
                                <th>
                                    <button onclick="myFunction()" type="button" class="btn btn-sm btn-outline-dark">&nbsp;Hapus</button>

                                </th>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="js/script.js"></script>
</body>

</html>