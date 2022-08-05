@extends('template.app')
@section('content')

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <form action="{{route('login')}}" method="post">
        @csrf
        <label for="email"></label><input type="email" name="email" id="email" placeholder="email">
        <br>
        <label for="password"></label>
        <input type="password" name="password" id="password" placeholder="password">
        <br>
        <input type="checkbox" name="remember" id="remember"><label for="remember">Remember me</label>
        <br>
        <button type="submit">Login</button>
        <br>
        <a href="{{ url('/register') }}">Registrasi</a>
    </form>

@endsection
