@extends('template.app')
@section('content')
    <form action="{{route('password.reset')}}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{ request()->route('token') }}">
        <input type="email" name="email" id="" value="{{ old('email') }}" placeholder="email">
        <input type="password" name="password" id="" placeholder="password" value="{{ old('password') }}">
        <input type="password" name="password_confirmation" id="" placeholder="password confirmation" value="{{ old }}">
        <button type="submit">Reset password</button>
    </form>
@endsection
