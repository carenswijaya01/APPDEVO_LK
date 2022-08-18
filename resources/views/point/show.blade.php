@extends('template')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <h2 class="text-center mt-2">Point: <b>{{$user->name}}</b></h2>
    <a href="{{url('/admin/points/create')}}" class="btn btn-primary"> + tambah Data baru</a>
    <br/>
    <br/>

    <table  class="table">
        <thead class="table-dark">
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
    {{$points->links()}}
    </main>
@endsection
