@extends('template')
@section('content')
<div class="container-2xxl">
    <div class="row mt-1">
        <div class="col-12">
            <div class="card p-4" style="background-color:#ffffff;box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                <h1 class="mt-2">Proposal Anggaran</h1>
                <h5 class="mt-2 text-secondary">{{$datass->name}}</h5>
                <hr class=" " style="height: 2px;">

            </div>
        </div>
        <div class="col-12">
            <div class="card p-4 mt-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                <div class="row mt-1">
                    <h4 class="mt-2">Pengiriman Proposal Anggaran</h4>
                    <form action="{{route('tentang-anggaran')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group my-4">
                            <label for="inputFile" class="form-label">Dokumen Proposal Anggaran</label>
                            <div class="input-group mb-3">
                                <input type="file" accept=".xls,.xlsx" class="form-control @error('file') is-invalid @enderror" id="inputGroupFile02" name="file">
                                <label class="input-group-text" for="inputGroupFile02">.xlsx</label>
                                @error('file')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputFile" class="form-label">Tujuan Pengiriman</label>
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group mb-3">
                                        <select class="form-select form-select-md @error('role_id') is-invalid @enderror " id="inputGroupSelect01" name="role_id">
                                            @foreach($roles as $role)
                                            <option value="{{$role['id']}}">{{$role['role']}}</option>
                                            @endforeach
                                        </select>
                                        @error('role_id')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Pengiriman</label>
                            <textarea class="form-control @error('description') is-invalid @enderror " id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                            @error('description')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="text-right">
                            <button class="col-2 btn btn-md btn-dark" type="submit" name="submit" style="background:#003289">Kirim
                            </button>
                        </div>
                    </form>


                </div>
            </div>
            <div class="card p-4 mt-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                <div class="row mt-1">
                    <h4 class="mt-2">Proposal Anggaran</h4>
                    <div class="col-lg-12">
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


                        <table class="table table-striped table-bordered nowrap" style="width:100%">
                            <thead style="background:#003289;" class="text-light">
                                <tr>
                                    <th>Nama Kegiatan</th>
                                    <th>Nama Pemegang Kegiatan</th>
                                    <th>Progres</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            @foreach($datas as $data)
                            <tr>
                                <th>{{$data->kegiatan->name}}</th>
                                <th>{{$data->kegiatan->nim}}</th>
                                <th>{{$data->role->role}}</th>
                                <th>{{$data->status}}</th>
                                <th>
                                    <form action="{{route('tentang-anggaran-download',$data->id)}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Unduh</button>
                                    </form>
                                </th>
                            </tr>
                            @endforeach
                        </table>

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function() {
        myInput.focus()
    })
</script>
@endsection