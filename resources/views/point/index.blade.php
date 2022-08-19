@extends('template')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

<h1>POINT</h1>
    <a href="{{url('/admin/points/create')}}" class="btn btn-primary mb-2"> + tambah Data baru</a>
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('error')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <table class="table">
        <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Mahasiswa</th>
        <th>NIM</th>
        <th>Aksi</th>
    </tr>
        </thead>
        @foreach($users as $user)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->nim}}</td>
                <td>
                    <a href="{{route('points.show',$user->id)}}" class="btn btn-sm btn-info">Detail Poin</a>
                </td>
            </tr>
        @endforeach
    </table>
{{$users->links()}}

</main>
@endsection
