@extends('template')
@section('content')
<div class="jumbotron mt-3">
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <h1 class="display-4">Dashboard</h1>
        <h4 class="text-black">Selamat datang {{auth()->user()->name}}</h4>
    </main>

</div>
@endsection