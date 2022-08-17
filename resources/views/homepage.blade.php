<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('css/homepage-icon.css') }}">
    <title>Home | Lembaga Kemahasiswaan</title>
</head>

<body>

    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active text-left">
                <img src="{{ asset('images/pic1.jpg') }}" class="d-block w-100 h-75" alt="...">
                <div class="carousel-caption text-start d-none d-md-block">
                    <h1 class="display-5 fw-bold">First slide label</h1>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    <a href="#" class="btn btn-outline-light" type="submit">Show more</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/pic2.jpg') }}" class="d-block w-100 h-75" alt="...">
                <div class="carousel-caption text-start d-none d-md-block">
                    <h1 class="display-5 fw-bold">Second slide label</h1>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    <a href="#" class="btn btn-outline-light" type="submit">Show more</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/pic3.jpg') }}" class="d-block w-100 h-75" alt="...">
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
                    <img src="{{ asset('images/pic1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <i class="fa-regular fa-calendar text-muted"></i>&nbsp;<small class="card-text text-muted">05 August 2022</small>
                        <div>
                            <i class="fa-regular fa-circle-user text-muted flex-d"></i>&nbsp;<small class="card-text text-muted">Author</small>
                        </div>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-grid gap-2 d-md-block">
                            <a href="#" class="btn btn-dark" type="submit">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 gx-5 gy-5">
                <div class="card shadow">
                    <img src="{{ asset('images/pic2.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <i class="fa-regular fa-calendar text-muted"></i>&nbsp;<small class="card-text text-muted">05 August 2022</small>
                        <div>
                            <i class="fa-regular fa-circle-user text-muted"></i>&nbsp;<small class="card-text text-muted">Author</small>
                        </div>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-grid gap-2 d-md-block">
                            <a href="#" class="btn btn-dark" type="submit">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 gx-5 gy-5">
                <div class="card shadow">
                    <img src="{{ asset('images/pic3.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <i class="fa-regular fa-calendar text-muted"></i>&nbsp;<small class="card-text text-muted">05 August 2022</small>
                        <div>
                            <i class="fa-regular fa-circle-user text-muted flex-d"></i>&nbsp;<small class="card-text text-muted">Author</small>
                        </div>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-grid gap-2 d-md-block">
                            <a href="#" class="btn btn-dark" type="submit">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 gx-5 gy-5">
                <div class="card shadow">
                    <img src="{{ asset('images/pic1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <i class="fa-regular fa-calendar text-muted"></i>&nbsp;<small class="card-text text-muted">05 August 2022</small>
                        <div>
                            <i class="fa-regular fa-circle-user text-muted flex-d"></i>&nbsp;<small class="card-text text-muted">Author</small>
                        </div>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-grid gap-2 d-md-block">
                            <a href="#" class="btn btn-dark" type="submit">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 gx-5 gy-5">
                <div class="card shadow">
                    <img src="{{ asset('images/pic2.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <i class="fa-regular fa-calendar text-muted"></i>&nbsp;<small class="card-text text-muted">05 August 2022</small>
                        <div>
                            <i class="fa-regular fa-circle-user text-muted flex-d"></i>&nbsp;<small class="card-text text-muted">Author</small>
                        </div>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-grid gap-2 d-md-block">
                            <a href="#" class="btn btn-dark" type="submit">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 gx-5 gy-5">
                <div class="card shadow">
                    <img src="{{ asset('images/pic3.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <i class="fa-regular fa-calendar text-muted"></i> <small class="card-text text-muted">05 August 2022</small>
                        <div>
                            <i class="fa-regular fa-circle-user text-muted"></i> <small class="card-text text-muted">Author</small>
                        </div>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-grid gap-2 d-md-block">
                            <a href="#" class="btn btn-dark" type="submit">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- album -->

    <!-- See All button -->
    <div class="container text-center mb-5">
        <a href="{{ url('#') }}" class="btn btn-outline-dark btn-lg px-4">Lihat Semua Pengumuman</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>