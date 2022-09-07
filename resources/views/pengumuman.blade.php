<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>LK-UKSW</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/stylesa.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="/">Lembaga Kemahasiswaan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/pengumuman">Pengumuman&nbsp;&nbsp;&nbsp;</a></li>
                        <li>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Login
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                  <li><a href="{{ route('login') }}" class="btn btn-outline-light" type="submit">Admin</a></li>
                                  <li><a href="" class="btn btn-outline-light" type="submit">Kegiatan</a></li>
                                  <li><a href="" class="btn btn-outline-light" type="submit">Mahasiswa</a></li>
                                </ul>
                              </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Pengumuman-->
        <div class="container">
            <div class="row mt-4">
                @foreach ($pengumuman as $p)
                <div class="col-md-4 gx-5 gy-5">
                    <div class="card shadow">
                        <img src="{{ asset('storage/' . $p->gambar) }}" style="width: 200px;" class="rounded mx-auto d-block card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">{{$p->judul}}</h5>
                            <!-- make time posted with text muted -->
                            <i class="fa-regular fa-calendar text-muted"></i>&nbsp;<small class="card-text text-muted">Publish : {{$p->created_at->toFormattedDateString()}}</small>
                            <div>
                                <i class="fa-regular fa-circle-user text-muted flex-d"></i>&nbsp;<small class="card-text text-muted">Author : {{$p->penyelenggara}}</small>
                            </div>
                            <!-- <p class="card-text">{!!\Illuminate\Support\Str::limit($p->deskripsi,100,'...')!!}</p> -->
                            <div class="d-grid gap-2 d-md-block">
                                <a href="{{ route('pengumuman.show',$p->id)}}" class="btn btn-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{ $pengumuman->links() }}
            </div>
        </div>

    </main>

    <!-- Footer-->
    <footer class="bg-dark py-4 mt-5">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; KBM-LK</div>
                </div>
                <div class="col-auto">
                    <a class="link-light small" href="#!">Email</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">UKSW</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">FTI</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scriptsa.js"></script>
</body>

</html>