<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Admin</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <h1>Data Admin</h1>
        <table border="1"  class="table">
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Update Data</th>
            </tr>
            @php
                $i = 1;
            @endphp
            @foreach ($admin as $d)
            <tr>
                <th>{{$i++}}</th>
                <th>{{$d->nim}}</th>
                <th>{{$d->name}}</th>
                <th>{{$d->email}}</th>
                <th>{{$d->role}}</th>
                <th>
                      <a href="{{ route('admin.edit',$d->id)}}">Edit</a>
                      <form action="{{ route('admin.destroy',$d->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" name="delete" value="Delete">
                        </form>
             </th>
            </tr>
            @endforeach
        </table>
            <a href="{{ route('admin.create')}}">Kembali</a>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
