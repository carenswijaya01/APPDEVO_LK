@extends('template')
@section('content')

<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <center><h2 class="mt-2">Data Admin</h2></center>
    <div class="container mt-3">
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

        <a href="{{ route('admin.create')}}" class="btn btn-primary mb-1">Tambah</a>
        <table  class="table">
            <thead class="table-dark">
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
            </thead>
            @php
                $i = 1;
            @endphp
          
        </table>
            
    </div>
</div>


@endsection