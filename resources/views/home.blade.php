<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- custom CSS -->
{{--    <link rel="stylesheet" href="{{asset( 'custom-style.css' )}}">--}}
    <!-- Icons -->
{{--    <link rel="stylesheet" href="{{ asset('icon/css/all.min.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('icon/css/all.css') }}">--}}
    <title>LK-UKSW</title>
    <!-- Favicon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/stylesa.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100" style="background-color: #f2f2f2;" >
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background:#003289">
            <div class="container px-5">
               <a class="navbar-brand" href="/">{{ auth()->user()->name }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <!-- <li class="nav-item"><a class="nav-link" href="/">Home</a></li> -->
                       <li class="nav-item"><a class="nav-link" href="{{ route('update-password-user') }}">Ganti Password&nbsp;&nbsp;&nbsp;</a></li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-outline-light">Logout</button>
                        </form>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-2xxl" style="margin:70px">
            <div class="row mt-1">
                <div class="col-12">
                    <div class="card p-4" style="background-color:#ffffff;box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                        <h1 class="mt-2">Poin KKM</h1>
                        <hr class=" " style="height: 2px;">
                        <div class="text-right">
                            <a href="{{ route('points.show.user')}}" class="btn btn-md mb-3 text-light" style="background:#003289">Detail Point</a>
                        </div>
                       
                    </div>
                </div>
                <div class="col-12">
                    <div class="card p-4 mt-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                        <div class="row mt-1">
                          <div class="col-lg-12">
                            <p class="fs-5 fw-bolder">Target Poin</p>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{$result}}%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="4"></div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="card p-4 mt-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                        <div class="row mt-1">
                          <div class="col-lg-12">
                            <table class="table table-bordered">
                                <thead class="text-light" style="background:#003289">
                                    <tr>
                                        <th scope="col">Jenis Poin</th>
                                        <th scope="col">Min.Poin</th>
                                        <th scope="col">Jumlah Poin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($points as $point)
            
                                    <tr>
                                        <th scope="row">{{ $point->name }}</th>
                                        <td>{{ $point->limit }}</td>
                                        <td>{{ $point->point }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                          
                        </div>
                    </div>
                </div>
                
            </div>
          </div>

    
        <br>

    </main>
    <!-- Footer-->
    <footer class="text-light py-4 mt-auto"  style="background:#003289">
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
