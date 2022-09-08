@extends('template')
@section('content')

<div class="container-2xxl">
    <div class="row mt-1">
        <div class="col-12">
            <div class="card p-4" style="background-color:#ffffff;box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                <h1 class="mt-2">Edit Data Kegiatan</h1>
                <hr class=" " style="height: 2px;">
               
            </div>
        </div>
        <div class="col-12">
            <div class="card p-4 mt-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                <div class="row mt-1">
                    <form action="{{ route('updateKegiatan',$keg->id)}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="form-label">Nama Kegiatan</label>
                                        <input type="text" class="form-control form-control-md "  name="nama_kegiatan" value="{{$keg->nama_kegiatan}}" required>
                                       
                                                  
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="">Jenis Kegiatan</label>
                                        <select class="form-select form-control-md" aria-label="" name="jenis_kegiatan" value="{{$keg->jenis_kegiatan}}">
            
                                            <option>Terstruktur</option>
                                            <option>Non-Terstruktur</option>
                                        </select>
                                    </div>
                                </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label">Nama Ketua Panitia</label>
                                    <input type="text" class="form-control form-control-md "   name="nama_ketua_panitia" value="{{$keg->nama_ketua_panitia}}" required>
                                   
                                              
                                </div>
                            </div>
                          </div>
                          <div class="form-group">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label">Waktu Pelaksanaan</label>
                                        <input type="text" class="form-control form-control-md "   name="tgl_kegiatan" value="{{$keg->tgl_kegiatan}}" required>
                                       
                                                  
                                    </div>
                                </div>
                          </div>
                          <div class="form-group">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label">Deskripsi Kegiatan</label>
                                        <textarea type="text" class="form-control form-control-md " id="deskripsi_kegiatan" name="deskripsi_kegiatan" rows="5"  required>{{$keg->deskripsi_kegiatan}}</textarea>
                                       
                                                  
                                    </div>
                                </div>
                          </div>
                          <div class="row ">
                            <a href="{{url('/admin/daftarKegiatan')}}" class="btn btn-danger mt-4 col-1 mx-2">Cancel</a>
                            <button class="btn btn-md btn-dark mt-4 col-2 " type="submit" style="background:#003289;">Update</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>

@endsection