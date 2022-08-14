<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POINTS</title>
</head>
<body>
    <a href="{{url('/admin/points/create')}}"> + tambah Data baru</a>
    <br/>
    <br/>

    <table border="1">
    <tr>
        <th>POINT ID</th>
        <th>ADMIN ID</th>
        <th>USER ID</th>
        <th>FILE</th>
        <th>TYPE POINT ID</th>
        <th>POINT</th>
    </tr>
    @foreach($points as $p)
    <tr>
        <td>{{$p->point_id}}</td>
        <td>{{$p->admin_id}}</td>
        <td>{{$p->user_id}}</td>
        <td>{{$p->file}}</td>
        <td>{{$p->type_point_id}}</td>
        <td>{{$p->point}}</td>
        <td>
        <a href="{{ route('points.edit',$p->point_id) }}">EDIT</a>
        <a href="points/hapus/{{$p->point_id}}">HAPUS</a>
        </td>
    </tr>
    @endforeach
    </table>
</body>
</html>
