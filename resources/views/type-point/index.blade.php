@extends('template')
@section('content')

<div class="container-2xxl">
    <div class="row mt-1">
        <div class="col-12">
            <div class="card p-4" style="background-color:#ffffff;box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                <h1 class="mt-2">Edit Poin</h1>
                <hr class=" " style="height: 2px;">
               
            </div>
        </div>
        <div class="col-12">
            <div class="card p-4 mt-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                <div class="row mt-1 p-4">
                    <table class="table table-striped table-bordered nowrap" >
                        <thead style="background:#003289;" class="text-light">
                            <tr>
                                <th>Limit</th>
                                <th>Tipe Poin</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                    <form action="{{ route('type-point.update')}}" method="post">
                                        @csrf
                                        @method('put')
                                <td><input type="number" class="form-control" id="limit" name="limit" placeholder="0"></td>
                                <td>
                                        <select class="form-select" id="tipepoin" name="name">
                                            @foreach ($typePoints as $point)
                                            <option value="{{ $point->name }}">{{ $point->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </td>
                                <td><button type="submit" class="btn btn-success">Edit</button></td>
                                    </form>
                            </tr>
                        </tbody>
                    </table>
                    <br>
        
                </div>
            </div>
            <div class="card p-4 mt-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                <div class="row mt-1 p-4">
                    <table class="table table-striped table-bordered nowrap">
                        <thead style="background:#003289;" class="text-light">
                            <tr>
                                <th>Limit</th>
                                <th>Tipe Poin</th>
                                {{-- <th>Aksi</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($typePoints as $point)
                            <tr>
                                <td>{{ $point->limit}}</td>
                                <td>{{ $point->name}}</td>
                                {{-- <td>
                                    <div class="btn-group me-2">
                                        <button type="button" class="btn btn-sm btn-outline-success">&nbsp;Edit&nbsp;</button>
                                    </div>
                                </td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
