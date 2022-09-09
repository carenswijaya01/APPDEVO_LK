<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUTAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
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
    <link rel="stylesheet" type="text/css" href="css/trix.css">
    <script type="text/javascript" src="js/trix.js"></script>
</head>

<body class="my-5" style="background-color: #f2f2f2;">

    <div class="container">
        <div class="row mt-1">
            <div class="col-12">
                <div class="card p-4" style="background-color:#ffffff;box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                    <h1 class="mt-2">Ganti Password</h1>
                    <hr class=" " style="height: 2px;">
                    @if ($errors->updatePassword->any())
                        @foreach($errors->updatePassword->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{$error}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endforeach
                    @endif
                   
                </div>
            </div>
            <div class="col-12">
                <div class="card p-4 mt-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                    <div class="row mt-1">
                        <form action="{{ route('user-password.update') }}" method="post">
                            @csrf
                            @method('put')
                            <input type="password" class="form-control @error('current_password') is-invalid @enderror"
                                name="current_password" id="" placeholder="current-password">
                            @error('current_password')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                            <br>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id=""
                                placeholder="new password">
                            @error('password')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                            <br>
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation" id="" placeholder="password confirmation">
                            @error('password_confirmation')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                            <br>
                            <center>
                                <a href="{{route('login')}}" class="btn btn-danger btn-md text-light col-2">Batal</a>
                            
                                <button type="submit" class="btn btn-md text-light col-3" style="background:#003289">Ganti Password</button>
                            </center>
                        </form>
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
