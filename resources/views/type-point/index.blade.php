@extends('template')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<center><h2>Edit Poin</h2></center>
<table class="table">
    <thead class="table-dark">
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
            <td><button type="submit" class="btn btn-dark">Edit</button></td>
                </form>
        </tr>
    </tbody>
</table>
<br>
<table class="table ">
    <thead class="table-dark">
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
</main>
@endsection
