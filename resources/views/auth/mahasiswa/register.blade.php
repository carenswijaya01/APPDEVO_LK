@extends('template.app')
@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif
    <form action="{{ route('register') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" >
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" >
        <br>
        <label for="nim">NIM</label>
        <input type="number" name="nim" id="nim" value="{{ old('nim') }}" >
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="{{ old('password') }}" >
        <br>
        <label for="confirm">Confirm-Password</label>
        <input type="password" name="password_confirmation" id="confirm" value="{{ old('password_confirmation') }}" >
        <br>
        <button type="submit">Register</button>
    </form>

    <a href="{{ url('/login') }}">Login</a>
@endsection
