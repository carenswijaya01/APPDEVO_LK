<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Admin</title>
</head>

<body>
    <h1>Data Admin</h1>
    <table border="1">
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
                <form action="{{ route('admin.edit',$d->id) }}" method="GET">
                    @csrf
                    @method('put')
                    <input type="submit" name="edit" value="Edit">
                </form>
                <form action="{{ route('admin.destroy',$d->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" name="delete" value="Delete">
                </form>
            </th>
        </tr>
        @endforeach
    </table>
    <form action="{{ route('admin.create') }}" method="GET">
        @csrf
        @method('put')
        <input type="submit" name="kembali" value="Kembali">
    </form>
</body>

</html>