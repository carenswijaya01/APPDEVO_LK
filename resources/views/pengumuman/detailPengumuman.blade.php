<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Detail Pengumuman</title>

    <!-- include summernote css/js-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
</head>

<body style="overflow-x: hidden">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #003289">
        <div class="container px-5">
            <a class="navbar-brand" href="/">Lembaga Kemahasiswaan FTI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{ route('pengumuman.index') }}" class="btn btn-outline-light" type="submit">Kembali</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/jumbotron.png" class="d-block w-100" alt="..." height="850px">
                <div class="carousel-caption d-none d-md-block" style="margin-bottom: 350px">
                    <h1>{{$pengumuman->judul}}</h1>
                    <h5>Lembaga Kemahasiswaan Fakultas Teknologi Informasi</h5>
                    <a href="#kegiatan" class="btn btn-outline-light mt-4">Selengkapnya</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="row mt-2 p-4">
        <div class="container p-4" id="kegiatan">
            <div class="row justify-content-center card">
                <div class="card-header">
                    <h3 class="text-center">Kegiatan</h3>
                    <h1 class="text-center">{{$pengumuman->judul}}</h1>
                </div>
                <div class="card-body text-center">
                    <div class="mt-4 row align-items-start d-inline-block ">
                        <div class="card" style="border: none;">
                            <center>
                                <img src="{{ asset('storage/' . $pengumuman->gambar) }}" style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;" width="400px" height="600px" class="mb-4">
                            </center>
                        </div>
                        <div class="mt-2">
                            <h5 class="fw-bold">Tanggal Post : {{$pengumuman->created_at->toDateString()}}</h5>
                            <h5 class="fw-bold">Penyelenggara : {{$pengumuman->penyelenggara}}</h5>


                            <article class="mt-4">
                                <div class="text-center">
                                    {!! $pengumuman->deskripsi !!}
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer-->
    <footer class="text-light py-4 mt-auto" style="background: #003289">
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
</body>

</html>