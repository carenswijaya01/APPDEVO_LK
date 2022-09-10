@extends('template')
@section('content')

<div class="container-2xxl">
    <div class="row mt-1">
        <div class="col-12">
            <div class="card p-4" style="background-color:#ffffff;box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                <h1 class="mt-2">Detail Proposal</h1>
                <hr class=" " style="height: 2px;">

            </div>
        </div>
        <div class="col-12">
            <div class="card p-4 mt-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                <div class="row mt-1">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label">Nama Kegiatan</label>
                                <input type="text" class="form-control form-control-lg " id="namaKegiatan" name="namaKegiatan" value="{{$datas->kegiatan->name}}" readonly>

                            </div>
                            <div class="col-6">
                                <label class="form-label">Nama Pemegang Kegiatan</label>
                                <input class="form-control form-control-lg " id="pemegangKegiatan" name="pemegangKegiatan" value="{{$datas->kegiatan->nim}}" readonly>

                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="deksripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly>{{$datas->description}}</textarea>
                    </div>

                    <a href="{{ route('proposal-anggaran') }}" class="col-2 btn btn-md btn-dark" type="submit" name="submit" style="background:#003289">Kembali</a>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection