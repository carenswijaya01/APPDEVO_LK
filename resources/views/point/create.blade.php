<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUTAN</title>
</head>

<body>
    <form method="POST" action="{{route('points.store')}}" enctype="multipart/form-data">
        @csrf
        <br />INPUTAN</br>
        <br />
        <!--
admin_id : <input type="text" name="admin_id"><br/>
user_id : <input type="text" name="user_id"><br/>
file : <input type="file" name="file"><br/>
type_point_id : <input type="text" name="type_point_id"><br/>
<select id="points" name="po">
        </select><br>
point : <input type="text" name="point"><br/> -->
        <label for="user">Mahasiswa</label>
        <select name="user_id" id="user">
            @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select><br>
        file : <input type="file" name="file" accept=".pdf"><br />
        type_point_id :
        <select name="type_point_id">
            @foreach ($typePoints as $point)
            <option value="{{ $point->id}}">{{ $point->name}}</option>
            @endforeach
        </select><br>
        point : <input type="number" name="point"><br />
        <button type="submit">Simpan</button>
    </form>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif
</body>

</html>
