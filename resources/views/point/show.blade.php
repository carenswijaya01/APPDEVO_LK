@extends('template')
@section('content')


<div class="container-2xxl">
    <div class="row mt-1">
        <div class="col-12">
            <div class="card p-4" style="background-color:#ffffff;box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                <h1 class="mt-2">Hai,<b>{{$user->name}}</b> Berikut poin kamu.</h1>
                <hr class=" " style="height: 2px;">
                <div class="text-right">
                    <a href="{{url('/admin/points/create')}}" class="btn mb-1 col-2 text-light" style="background:#003289d2">Tambah Data Baru</a>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card p-4 mt-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                <div class="row mt-1">
                    <div class="col-lg-12">
                        <table class="table table-striped table-bordered nowrap">
                            <thead style="background:#003289;" class="text-light">
                            <tr>
                                <th>Admin yang menambah</th>
                                <th>Mahasiswa</th>
                                <th>FILE</th>
                                <th>Tipe Point</th>
                                <th>POINT</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            @foreach($points as $p)
                                <tr>
                                    <td>{{$p->admin->name}}</td>
                                    <td>{{$p->user->name}}</td>
                                    <td><a target="_blank" href="{{asset('storage/'.$p->file)}}">{{$p->user->name}}.pdf</a></td>
                                    <td>{{$p->type_point->name}}</td>
                                    <td>{{$p->point}}</td>
                                    <td>
                                        <a href="{{ route('points.edit',$p->id) }}" class="btn btn-sm btn-success">EDIT</a>
                                        <form action="{{route('points.destroy',$p->id)}}" method="post" class="d-inline " onclick="return confirm('yakin ingin menghapus point ini?')">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" value="Delete" class="btn btn-sm btn-danger"
                                                   onclick="return confirm('yakin ingin menghapus point ini?')">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    {{$points->links()}}
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
