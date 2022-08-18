@extends('template.app')
@section('content')

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <div class="cover" style="background-image:url(images/COVER.PNG);
	background-size: cover;
	height: 120vh;">
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
                </div>
    <form class="login100-form validate-form" action="{{route('login')}}" method="post" enctype="multipart/form-data">
        <span class="login100-form-title">
            Login Mahasiswa
        </span>
        @csrf
        <div class="wrap-input100 validate-input" data-validate = "Email yang Valid dibutuhkan: ex@uksw.edu">
            <input class="input100" type="email" name="email" placeholder="Email">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Password Dibutuhkan">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
        </div>

        <div class="container-login100-form-btn">
            <button class="login100-form-btn">
                Login
            </button>
        </div>

        <div class="text-center p-t-12">
            <span class="txt1">
                <input type="checkbox" name="remember" id="remember"><label for="remember">Ingatkan Saya</label>
            </span>
        </div>

        <div class="text-center p-t-136">
            <a class="txt2" href="{{ url('/register') }}">
                Buat akun baru
                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
        </div>
    </form>

            </div>
        </div>
    </div>

@endsection
