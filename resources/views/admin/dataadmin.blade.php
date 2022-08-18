@extends('template')
@section('content')
<!DOCTYPE html>
<html lang="en">

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <body>
        <center><h2>Data Admin</h2></center>
        <div class="container mt-3">
            <table border="1"  class="table">
                <thead class="table-dark">
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Update Data</th>
                </tr>
                </thead>
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
                <a href="{{ route('admin.create')}}">Tambah</a>

    </body>

</main>


</html>
@endsection
