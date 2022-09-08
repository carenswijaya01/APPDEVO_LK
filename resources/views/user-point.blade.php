
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
<body>

    <h2 class="text-center mt-2">Point: <b>{{$user->name}}</b></h2>
    <br/>
    <br/>

    <table  class="table">
        <thead class="table-dark">
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

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scriptsa.js"></script>
</body>
</html>
