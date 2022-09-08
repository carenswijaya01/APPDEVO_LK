@extends('template')
@section('content')

<div class="container-2xxl">
    <div class="row mt-1">
        <div class="col-12">
            <div class="card p-4" style="background-color:#ffffff;box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                <h1 class="mt-2">Pengumuman</h1>
                <hr class=" " style="height: 2px;">
                <div class="text-right">
                    <a href="{{ route('pengumuman.create')}}" class="btn mb-1 col-2 text-light" style="background:#003289d2">Tambah Pengumuman</a>
                </div>
               
            </div>
        </div>
        <div class="col-12">
            <div class="card p-4 mt-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                <div class="row mt-1">
                    <table class="table table-striped table-bordered nowrap" style="width: 100%">
                        <thead style="background:#003289;" class="text-light">
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
                </div>
            </div>
        </div>
    </div>
  </div>



@endsection