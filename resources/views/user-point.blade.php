
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
<body style="background-color: #f2f2f2;margin:70px">

    <div class="container-2xxl">
        <div class="row mt-1">
            <div class="col-12">
                <div class="card p-4" style="background-color:#ffffff;box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                    <h2 class="mt-2">Point: <b>{{$user->name}}</h1>
                    <hr class=" " style="height: 2px;">
                    <div class="text-right">
                        <a href="{{route('login')}}" class="btn btn-md mb-3 text-light" style="background:#003289">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card p-4 mt-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                    <div class="row mt-1">
                      <div class="col-lg-12">
                        <table  class="table">
                            <thead  class="text-light" style="background:#003289" >
                            <tr>
                                <th>Mahasiswa</th>
                                <th>FILE</th>
                                <th>Tipe Point</th>
                                <th>POINT</th>
                            </tr>
                            </thead>
                            @foreach($points as $p)
                                <tr>
                                    <td>{{$p->user->name}}</td>
                                    <td><a target="_blank" href="{{asset('storage/'.$p->file)}}">{{$p->user->name}}.pdf</a></td>
                                    <td>{{$p->type_point->name}}</td>
                                    <td>{{$p->point}}</td>
                                </tr>
                            @endforeach
                        </table>
                        {{$points->links()}}
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </div>    

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scriptsa.js"></script>
</body>
</html>
