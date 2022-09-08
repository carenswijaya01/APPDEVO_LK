@extends('template')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-2">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Pengumuman</title>

        <!-- include summernote css/js-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
    </head>

    <body>
        <h2 class="text-center mt-4">PENGUMUMAN</h2>

        <a href="{{ route('pengumuman.create')}}" class="btn btn-primary mb-2 ms-2 mt-4">Tambah Pengumuman</a>

        <table class=" table align-middle">
            <thead class="table-dark">
                <tr>
                    <td class="col-1 text-center">No</td>
                    <td class="col-5">Judul</td>
                    <td>Penyelenggara</td>
                    <td class="col-3">Aksi</td>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 1;
                @endphp
                @foreach ($pengumuman as $p)
                <tr>
                    <td class="text-center">{{$i++}}</td>
                    <td>{{$p->judul}}</td>
                    <td>{{$p->penyelenggara}}</td>
                    <td>
                        <a href="{{ route('pengumuman.show',$p->id)}}" class="btn btn-primary d-inline">Detail</a>
                        <a href="{{ route('pengumuman.edit',$p->id)}}" class="btn btn-warning d-inline">Edit</a>
                        <form action="{{ route('pengumuman.destroy',$p->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" onclick="return confirm('Ingin Hapus Data?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $pengumuman->links() }}
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</main>

@endsection
