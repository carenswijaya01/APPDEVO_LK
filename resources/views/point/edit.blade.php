<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editan</title>
</head>

<body>
    <form method="POST" action="{{route('points.update',$point->id)}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <br />EDITAN</br>
        <br />
        <label for="user">Mahasiswa</label>
        <select name="user_id" id="user">
            @foreach ($users as $user)
            <option value="{{$user->id == $point->user_id}}">{{$user->name}}</option>
            @endforeach
        </select><br>
        file : <input type="file" name="file" accept=".pdf"><br />
        type_point_id :
        <select name="type_point_id">
            @foreach ($typePoints as $typePoint)
            <option @selected($typePoint->id == $point->type_point_id) value="{{ $typePoint->id}}">{{ $typePoint->name}}
            </option>
            @endforeach
        </select><br>

        point : <input type="number" name="point" value="{{$point->point}}" ><br />
        <button type="submit">Simpan</button>
    </form>

    @if($errors->any())
    @foreach($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
    @endif
</body>

</html>
