@extends('template.app')
<h1>{{ auth()->user()->name }}</h1>
{{--logout--}}
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit">logout</button>
</form>
<a href="{{ route('update-password-user') }}">Change Password</a>
<a href="/registration-program">Daftar</a>
