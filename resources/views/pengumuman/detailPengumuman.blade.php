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

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="/">Lembaga Kemahasiswaan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pengumuman">Pengumuman&nbsp;&nbsp;&nbsp;</a></li>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-outline-light" type="submit">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('storage/' . $pengumuman->gambar) }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
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
        <div class="container">
            <div class="row justify-content-center">
                <h3 class="text-center">Kegiatan</h3>
                <h1 class="text-center text-uppercase">{{$pengumuman->judul}}</h1>

                <div class="mt-4 row align-items-start d-inline-block">
                    <img src="{{ asset('storage/' . $pengumuman->gambar) }}" style="width: 500px;" class="img-thumbnail" alt="...">
                    <div class="">
                        <h2>{{$pengumuman->judul}}</h2>
                        <h5>Tanggal Post : {{$pengumuman->created_at->toDateString()}}</h5>
                        <h5>Penyelenggara : {{$pengumuman->penyelenggara}}</h5>

                        <article>
                            <div style="text-align: justify;">
                                {!! $pengumuman->deskripsi !!}
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
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