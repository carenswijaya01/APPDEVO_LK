@extends('template')
@section('content')

<div class="container-2xxl">
    <div class="row mt-1">
        <div class="col-12">
            <div class="card p-4" style="background-color:#ffffff;box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                <h1 class="mt-2">Daftar Proposal Anggaran Bendahara SMF</h1>
                <hr class=" " style="height: 2px;">
                
            </div>
        </div>
        <div class="col-12">
            <div class="card p-4 mt-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                <div class="row mt-1">
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
                                    <th>No.</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Nama Pemegang Kegiatan</th>
                                    <th>No.Telp</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            @php
                                $i = 1;
                            @endphp
                           
                                <tr>
                                    <th>{{$i++}}</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>
                                        <div class="row">
                                            <a href="" class="btn btn-primary mb-2">Unduh</a>
                                        </div>
                                        <div class="row">
                                            <a href="" class="btn btn-danger mb-2" onclick="return confirm('Ingin Menyatakan Bahwa Direvisi ?')">Revisi</a>
                                        </div>
                                        <div class="row">
                                            <a href="" class="btn btn-success" onclick="return confirm('Ingin Menyatakan Bahwa Fix?')">Fix</a>
                                        </div>
                                    </th>
                                </tr>
                         
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
