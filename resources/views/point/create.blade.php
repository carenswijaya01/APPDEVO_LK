<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUTAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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

<body>
    <div class="poin-content px-5 pt-3">
        <div class="poin-content px-3 pt-2">
          <div class="container">
            <span class="text-center">
                <h2>Input Poin</h2>
              </span>
    <form method="POST" action="{{route('points.store')}}" enctype="multipart/form-data" class="">
        @csrf
        <!--
admin_id : <input type="text" name="admin_id"><br/>
user_id : <input type="text" name="user_id"><br/>
file : <input type="file" name="file"><br/>
type_point_id : <input type="text" name="type_point_id"><br/>
<select id="points" name="po">
        </select><br>
point : <input type="text" name="point"><br/> -->
        <div class="row">
        <div class="col-20">
        <label for="user" class="form-label">Mahasiswa</label>
        <select name="user_id" class="form-select" id="user">
            @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select><br>
        </div>
        </div>
        <div class="col-75">
        <input type="file" name="file" accept=".pdf" class="btn btn-dark"><br />
        </div>
        <br>
        <label for="title">Tipe Poin</label>
        <select name="type_point_id" class="form-select">
            @foreach ($typePoints as $point)
            <option value="{{ $point->id}}">{{ $point->name}}</option>
            @endforeach
        </select><br>
        point : <input type="number" class="form-control" name="point"><br />
        <button type="submit" class="btn btn-dark">Simpan</button>
    </form>
            </div>
        </div>
    </div>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="js/script.js"></script>
</body>

</html>
