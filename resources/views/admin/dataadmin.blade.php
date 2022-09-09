@extends('template')
@section('content')

<div class="container-2xxl">
    <div class="row mt-1">
        <div class="col-12">
            <div class="card p-4" style="background-color:#ffffff;box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                <h1 class="mt-2">Data Admin</h1>
                <hr class=" " style="height: 2px;">
                <div class="text-right">
                    <a href="{{ route('admin.create')}}" class="btn mb-1 col-2 text-light" style="background:#003289d2">Tambah</a>
                </div>
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
                                    <th>NIM</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($admin as $d)
                                <tr>
                                    <th>{{$i++}}</th>
                                    <th>{{$d->nim}}</th>
                                    <th>{{$d->name}}</th>
                                    <th>{{$d->email}}</th>
                                    <th>{{$d->role->role}}</th>
                                    <th>
                                        <a href="{{ route('admin.edit',$d->id)}}" class="btn btn-success">Edit</a>
                                        <form action="{{ route('admin.destroy',$d->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" name="delete" value="Delete" class="btn btn-danger"
                                                onclick="return confirm('yakin ingin menghapus data admin ini?')">
                                        </form>
                                    </th>
                                </tr>
                            @endforeach
                        </table>
                        {{ $admin->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
