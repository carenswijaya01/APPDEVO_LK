
@extends('template')
@section('content')
<main class="form-signin">
    <h1 class="h1">Tambah Kegiatan</h1>
    <form action="{{ route('event.store') }}" method="post">
        @csrf
                  <br>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-6">
                        <label class="form-label">Nama Kegiatan</label>
                        <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" id="name" placeholder="Nama Kegiatan" name="name">
                          @error('name')
                        <div class="invalid-feedback">{{$message}}</div>            @enderror
                      </div>
                      <div class="col-6">
                        <label class="form-label">Nama Pemegang Kegiatan</label>
                        <input type="text" class="form-control form-control-lg @error('nim') is-invalid @enderror" id="nim" placeholder="Nama Pemegang Kegiatan" name="nim">
                          @error('nim')
                        <div class="invalid-feedback">{{$message}}</div>            @enderror
                      </div>
                    </div>
                  </div>
                  <div class="form-group mb-4">
                    <div class="row">
                      <div class="col-12">
                        <label class="form-label">Alamat Email</label>
                        <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email" placeholder="nim@uksw.edu" name="email">
                          @error('email')
                        <div class="invalid-feedback">{{$message}}</div>            @enderror
                      </div>
                    </div>
                  </div>
                  {{-- <div class="form-group">
                    <div class="row">
                      <div class="col-12">
                        <div class="input-group mb-3">
                          <select class="form-select form-select-lg" id="inputGroupSelect01">
                            <option selected>Pilih Role</option>
                            <option value="1">Admin</option>
                            <option value="2">Kegiatan</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div> --}}

                  <br>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-6">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password">
                          @error('password')
                        <div class="invalid-feedback">{{$message}}</div>            @enderror
                      </div>
                      <div class="col-6">
                        <label class="form-label form-label-lg">Konfirmasi Password</label>
                        <input type="password" class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror" id="password2" placeholder="Password" name="password_confirmation">
                          @error('password_confirmation')
                        <div class="invalid-feedback">{{$message}}</div>            @enderror
                      </div>
                    </div>
                  </div>

                  <hr class="mt-4 mb-4">
                  <button class="col-2 btn btn-md btn-dark" type="submit" name="submit" style="background:#003289">Tambah</button>
               
    </form>
</main>
</center>
@endsection
