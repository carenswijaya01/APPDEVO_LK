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
                        <!-- <li class="nav-item"><a class="nav-link" href="/">Home</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="{{ route('update-password-user') }}">Ganti Password&nbsp;&nbsp;&nbsp;</a></li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-outline-light">logout</button>
                        </form>

                    </ul>
                </div>
            </div>
        </nav>

        <!-- isi nya -->
        <!-- Jumbotron -->
        <div class="container-fluid my-5">
            <div class="jumbotron jumbotron-fluid text-center">
                <p class="fs-1 fw-bolder">Poin KKM</p>

            </div>
        </div>
        <!-- Jumbotron -->
        <div class="container-fluid my-5">
            <div class="jumbotron jumbotron-fluid">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Jenis Poin</th>
                            <th scope="col">Min.Poin</th>
                            <th scope="col">Jumlah Poin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">OMB</th>
                            <td>150</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th scope="row">Ketrampilan Profesional</th>
                            <td>300</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th scope="row">Keterampilan Bersifat Kemanusiaan</th>
                            <td>250</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th scope="row">Keterampilan Penunjang</th>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <p class="fs-5 fw-bolder">Target Poin</p>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="250"></div>
                </div>
            </div>
            <br>
            <br>
        </div>
        <br>

    </main>
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
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scriptsa.js"></script>
</body>

</html>