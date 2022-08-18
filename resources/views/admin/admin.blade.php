<?php
?>


@extends('template')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRUD Admin</title>
</head>

<center>
    <main class="form-signin">
      <form>
        <h1 class="h1">Tambah Admin</h1>
        <br>

        <div>
          <form action="/action_page.php">
            <select class="form-select" id="sel1" name="sellist1">
            <option>Admin</option>
            <option>Super Admin</option>
          </select>
        </form action="{{ route('admin.store') }}" method="POST">
        @csrf
        </div>
        <br>
        <div class="form-floating">
          <input type="text" class="form-control" id="name" placeholder="Nama" name="name">
          <label for="floatingInput">Nama</label>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" id="nim" placeholder="NIM" name="nim">
          <label for="floatingInput">NIM</label>
        </div>
        <div class="form-floating">
          <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
          <label for="floatingInput">Alamat Email</label>
        </div>
        <br>
        <div class="form-floating">
          <input type="password" class="form-control" id="password" placeholder="Password" name="password">
          <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="password2" placeholder="Password" name="password_confirmation">
          <label for="floatingPassword">Konfirmasi Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-dark" type="submit" name="submit">Tambah</button>
      </form>
    </main>
    </center>
                <a href="{{ route('admin.index')}}">Lihat Data</a>
                <br><br><br>


        @if($errors->any())
            @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        @endif

        @if (session('success'))
            <p>{{session('success')}}</p>
        @endif
    </body>

</main>

</html>
@endsection
