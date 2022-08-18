@extends('template')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Data Pegawai</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <meta name="theme-color" content="#712cf9">
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

<body class="">
    <div class="row mt-4 p-4">
        <div class="container">
            <div class="row justify-content-center">
                <h2 class="mt-4 text-center">Daftar Data Kegiatan</h2>
                <div class="col-12">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <div class="card-tools">
                                <div class="row p-3" style="float: right;">
                                    <a href="{{ route('tambahKegiatan')}}" class="btn btn-primary">Tambah Kegiatan</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-dark table-striped mt-1">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Kegiatan</th>
                                        <th>Jenis Kegiatan</th>
                                        <th>Nama Ketua Panitia</th>
                                        <th>Tanggal Pelaksanaan</th>
                                        <th>Deskripsi Kegiatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    ?>
                                    @foreach ($dataKegiatan as $item)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{$item ->nama_kegiatan}}</td>
                                        <td>{{$item ->jenis_kegiatan}}</td>
                                        <td>{{$item ->nama_ketua_panitia}}</td>
                                        <td>{{$item ->tgl_kegiatan}}</td>
                                        <td>{{$item ->deskripsi_kegiatan}}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-3">
                                                    <a href="{{ route('editKegiatan', $item->id)}}" class="btn btn-success">Edit</a>
                                                </div>
                                                <div class="col-3">
                                                    <a href="{{ route('deleteKegiatan', $item->id)}}" onclick="return alert('Yakin untuk Menghapus ?')" class="btn btn-danger">Hapus</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                    $no++;
                                    ?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</main>

@endsection
