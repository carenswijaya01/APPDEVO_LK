@extends('template')
@section('content')
<style>
    .proposal{
        background:#003289d2;
        
    }
    .proposal{
        color: white;
    }
    
    .proposal:hover{
        background:white;
        border: 1px solid #003289d2;
        transition: .5s;
        color: #003289d2;
        
    }
</style>

<div class="container-2xxl">
    <div class="row mt-1">
        <div class="col-12">
            <div class="card p-4" style="background-color:#ffffff;box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                <h1 class="mt-2">Dashboard</h1>
                <h4 class="text-black">Selamat datang {{auth()->user()->name}}</h4>
                <hr class=" " style="height: 2px;">
                <div class="row">
                    <div class="col-6">
                        <div class="card proposal">
                            <div class="col-6" style="height:200px">
                                <a href="#kegiatan" class="text-decoration-none">
                                        <div class="solution_card">
                                          
                                                <div class="solu_title p-2 h2">
                                                    Alur Proposal Kegiatan
                                                </div>
                                        </div>
                                 </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card proposal">
                            <div class="col-6" style="height:200px">
                                <a href="#anggaran" class="text-decoration-none">
                                    <div class="solution_card">
                                      
                                        <div class="solu_title p-2 h2">
                                            Alur Proposal Anggaran
                                        </div>
                                        
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="col-12 p-4">
            <div id="kegiatan" class="card p-4 mt-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                <div class="row mt-1 text-center">
                    <h1 class="mt-2 ">Alur Proposal Kegiatan</h1>
                    <div class="card p-4">
                        <center>
                            <img src="/img/alur_sekretaris.png" alt="" width="800px" height="700px">
                        </center>
                    </div>
                </div>
            </div>
            <div id="anggaran" class="card p-4 mt-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                <div class="row mt-1 text-center">
                    <h1 class="mt-2">Alur Proposal Anggaran</h1>
                    <div class="card p-4">
                        <center>
                            <img src="/img/alur_bendahara.png" alt="" width="800px" height="700px">
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

@endsection