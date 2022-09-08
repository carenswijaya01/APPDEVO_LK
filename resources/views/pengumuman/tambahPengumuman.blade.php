@extends('template')
@section('content')
<link rel="stylesheet" type="text/css" href="/css/trix.css">
<script type="text/javascript" src="/js/trix.js"></script>


<div class="container-2xxl">
    <div class="row mt-1">
        <div class="col-12">
            <div class="card p-4" style="background-color:#ffffff;box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                <h1 class="mt-2">Tambah Pengumuman</h1>
                <hr class=" " style="height: 2px;">
               
            </div>
        </div>
        <div class="col-12">
            <div class="card p-4 mt-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                <div class="row mt-1">
                    <form action="{{ route('pengumuman.store') }}" enctype="multipart/form-data" method="POST" class="p-4">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="judul" class="form-label text-bold"><b>Judul Kegiatan</b></label>
                                    <input type="text" class="form-control form-control-md" id="judul" placeholder="" name="judul" value="{{ old('judul') }}" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="penyelenggara" class="form-label mt-2 text-bold"><b>Penyelenggara</b></label>
                                    <input type="text" class="form-control form-control-md" id="penyelenggara" placeholder="" name="penyelenggara" value="{{ old('penyelenggara') }}" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="gambar" class="form-label mt-2"><b>Poster Kegiatan</b></label>
                                    <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" onchange="previewImage()" required>
                                    <img class="img-preview img-fluid mt-3 col-sm-4">
                                    @error('gambar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
    
                        <h5 class="mt-4" style="color: #2D3F9F;">Deskripsi Kegiatan</h5>
                        <div class="form-group">
                            <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}" required>
                            <trix-editor input="deskripsi" class="@error('deskripsi') is-invalid @enderror"></trix-editor>
                            @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
    
                        <div class="row mt-4">
                            <div class="col-12">
                                <button type="submit" name="submit" id="simpan" class="btn btn-primary mr-1 mx-2" style="float: right">Simpan</button>
                                <a href="{{ route('pengumuman.index')}}" class="btn btn-danger mr-2" style="float: right">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>

@endsection