@extends('template')
@section('content')



<div class="container-2xxl">
    <div class="row mt-1">
        <div class="col-12">
            <div class="card p-4" style="background-color:#ffffff;box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                <h1 class="mt-2">Daftar Data Kegiatan</h1>
                <hr class=" " style="height: 2px;">
                <div class="text-right">
                    <a href="{{ route('tambahKegiatan')}}" class="btn mb-1 col-2 text-light" style="background:#003289d2">Tambah Kegiatan</a>
                </div>
               
            </div>
        </div>
        <div class="col-12">
            <div class="card p-4 mt-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                <div class="row mt-1">
                    <div class="col-lg-12">
                        <table class="table table-striped table-bordered nowrap" style="width:100%">
                            <thead style="background:#003289;" class="text-light">
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

@endsection
