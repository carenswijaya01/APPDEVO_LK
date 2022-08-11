@extends('template.app')
@section('content')
    <h2>Change Password</h2>
    <form action="{{ route('user-password.update') }}" method="post">
        @csrf
        @method('put')
        <input type="password" name="current_password" id="" placeholder="current-password"  >
        <input type="password" name="password" id="" placeholder="new password"  >
        <input type="password" name="password_confirmation" id="" placeholder="password confirmation" >
        <button type="submit">Change password</button>
    </form>
@endsection
