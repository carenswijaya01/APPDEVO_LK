<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editan</title>
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
                <h2>Rubah Poin</h2>
              </span>
    <form method="POST" action="{{route('points.update',$point->id)}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-20">
        <label for="user" class="form-label" >Mahasiswa</label>
        <select name="user_id" class="form-select" id="user">
            @foreach ($users as $user)
            <option value="{{$user->id}}" @selected($user->id == $point->user_id)>{{$user->name}}</option>
            @endforeach
        </select><br>
            </div>
        </div>
        <input type="file" name="file" accept=".pdf" class="btn btn-dark"><br />
        <br>
        <label for="title">Tipe Poin</label>
        <select name="type_point_id" class="form-select">
            @foreach ($typePoints as $typePoint)
            <option @selected($typePoint->id == $point->type_point_id) value="{{ $typePoint->id}}">{{ $typePoint->name}}
            </option>
            @endforeach
        </select><br>
        <label for="title">Poin</label>
        <input type="number" class="form-control" name="point" value="{{$point->point}}" ><br />
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
