<?php
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD Admin</title>
</head>
<body>
    <h1> Create Admin Account</h1>
    <ul>
        <form action="{{ route('admin.store') }}" method="POST">
            @csrf
            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim" placeholder="Enter your NIM" required >
            <br>
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" placeholder="Enter your name" required>
            <br>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email address" required>
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>
            <br>
            <label for="password2">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" id="password2" placeholder="Confirm your password" required>
            <br>
            <input type="submit" name="submit" value="Buat Akun">
        </form>
       
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
</html>


