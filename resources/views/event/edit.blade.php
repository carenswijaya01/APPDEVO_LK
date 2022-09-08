@extends('template')
@section('content')
    <main class="form-signin">
        <h1 class="h1">Edit Kegiatan</h1>
        <form action="{{ route('event.update',$event->id) }}" method="post">
            @csrf
            @method('put')
            <br>
            <div class="form-floating">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama"
                       name="name" value="{{ $event->name }}">
                <label for="floatingInput">Nama</label>
                @error('name')
                <div class="invalid-feedback">{{$message}}</div> @enderror
            </div>
            <div class="form-floating">
                <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="NIM"
                       name="nim" value="{{$event->nim}}">
                <label for="floatingInput">NIM</label>
                @error('nim')
                <div class="invalid-feedback">{{$message}}</div> @enderror
            </div>
            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                       placeholder="name@example.com" name="email" value="{{$event->email}}">
                <label for="floatingInput">Alamat Email</label>
                @error('email')
                <div class="invalid-feedback">{{$message}}</div> @enderror
            </div>
            <br>
            <strong class="text-secondary">Optional</strong>
            <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                       placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
                @error('password')
                <div class="invalid-feedback">{{$message}}</div> @enderror
            </div>
            <div class="form-floating">
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                       id="password2" placeholder="Password" name="password_confirmation">
                <label for="floatingPassword">Konfirmasi Password</label>
                @error('password_confirmation')
                <div class="invalid-feedback">{{$message}}</div> @enderror
            </div>
            <button class="w-100 btn btn-lg btn-dark" type="submit" name="submit">Edit</button>
        </form>
    </main>
    </center>
@endsection
