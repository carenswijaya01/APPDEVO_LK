<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- custom CSS -->
        <link rel="stylesheet" href="{{asset( 'custom-style.css' )}}">
        <!-- Icons -->
        <link rel="stylesheet" href="{{ asset('icon/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('icon/css/all.css') }}">
        <title>LK-UKSW</title>
        <!-- Favicon-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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
                    <a class="navbar-brand" href="/">{{ auth()->user()->name }}</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('update-password-user') }}">Ganti Password</a></li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-outline-light">logout</button>
                            </form>

                        </ul>
                    </div>
                </div>
            </nav>

    <!-- isi nya -->
    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active text-left">
                <img src="/img/pic1.jpg" class="d-block w-100 h-75" alt="...">
                <div class="carousel-caption text-start d-none d-md-block">
                    <h1 class="display-5 fw-bold">First slide label</h1>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    <!-- make button show more -->
                    <a href="#" class="btn btn-outline-light" type="submit">Show more</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/pic2.jpg" class="d-block w-100 h-75" alt="...">
                <div class="carousel-caption text-start d-none d-md-block">
                    <h1 class="display-5 fw-bold">Second slide label</h1>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    <a href="#" class="btn btn-outline-light" type="submit">Show more</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/pic3.jpg" class="d-block w-100 h-75" alt="...">
                <div class="carousel-caption text-start d-none d-md-block">
                    <h1 class="display-5 fw-bold">Third slide label</h1>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    <a href="#" class="btn btn-outline-light" type="submit">Show more</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- carousel -->

    <!-- Jumbotron -->
    <div class="container-fluid my-5">
        <div class="jumbotron jumbotron-fluid text-center">
            <p class="fs-1 fw-bolder">Pengumuman</p>
            <hr>
        </div>
    </div>
    <!-- Jumbotron -->

    <!-- album -->
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-4 gx-5 gy-5">
                <div class="card shadow">
                    <img src="/img/pic1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <!-- make time posted with text muted -->
                        <i class="fa-regular fa-calendar text-muted"></i>&nbsp;<small class="card-text text-muted">05 August 2022</small>
                        <div>
                            <i class="fa-regular fa-circle-user text-muted flex-d"></i>&nbsp;<small class="card-text text-muted">Author</small>
                        </div>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modelId">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 gx-5 gy-5">
                <div class="card shadow">
                    <img src="/img/pic2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <i class="fa-regular fa-calendar text-muted"></i>&nbsp;<small class="card-text text-muted">05 August 2022</small>
                        <div>
                            <i class="fa-regular fa-circle-user text-muted"></i>&nbsp;<small class="card-text text-muted">Author</small>
                        </div>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modelId">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 gx-5 gy-5">
                <div class="card shadow">
                    <img src="/img/pic3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <i class="fa-regular fa-calendar text-muted"></i>&nbsp;<small class="card-text text-muted">05 August 2022</small>
                        <div>
                            <i class="fa-regular fa-circle-user text-muted flex-d"></i>&nbsp;<small class="card-text text-muted">Author</small>
                        </div>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modelId">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 gx-5 gy-5">
                <div class="card shadow">
                    <img src="/img/pic1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <!-- make time posted with text muted -->
                        <i class="fa-regular fa-calendar text-muted"></i>&nbsp;<small class="card-text text-muted">05 August 2022</small>
                        <div>
                            <i class="fa-regular fa-circle-user text-muted flex-d"></i>&nbsp;<small class="card-text text-muted">Author</small>
                        </div>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modelId">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 gx-5 gy-5">
                <div class="card shadow">
                    <img src="/img/pic2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <i class="fa-regular fa-calendar text-muted"></i>&nbsp;<small class="card-text text-muted">05 August 2022</small>
                        <div>
                            <i class="fa-regular fa-circle-user text-muted flex-d"></i>&nbsp;<small class="card-text text-muted">Author</small>
                        </div>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modelId">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 gx-5 gy-5">
                <div class="card shadow">
                    <img src="/img/pic3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <i class="fa-regular fa-calendar text-muted"></i> <small class="card-text text-muted">05 August 2022</small>
                        <div>
                            <i class="fa-regular fa-circle-user text-muted"></i> <small class="card-text text-muted">Author</small>
                        </div>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modelId">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- album -->








    </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; KBM-LK</div></div>
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

