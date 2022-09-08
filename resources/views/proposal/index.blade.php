@extends('template')
@section('content')

<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <center>
        <h2 class="mt-2">Data Kegiatan</h2>
    </center>
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

        <a href="{{ route('proposal.create')}}" class="btn btn-primary mb-1">Tambah</a>
        <table class="table">
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
            @foreach ($events as $event)
            <tr>
                <th>{{$i++}}</th>
                <th>{{$event->nim}}</th>
                <th>{{$event->name}}</th>
                <th>{{$event->email}}</th>
                <th>{{$event->role}}</th>
                <th>
                    <a href="{{ route('proposal.edit',$event->id)}}" class="btn btn-success">Edit</a>
                    <form action="{{ route('proposal.destroy',$event->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <input type="submit" name="delete" value="Delete" class="btn btn-danger"
                            onclick="return confirm('yakin ingin menghapus data admin ini?')">
                    </form>
                </th>
            </tr>
            @endforeach
        </table>

    </div>
</div>


@endsection
