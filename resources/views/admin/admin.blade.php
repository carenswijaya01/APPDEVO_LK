@extends('template')
@section('content')
<div class="container-2xxl">
  <div class="row mt-1">
      <div class="col-12">
          <div class="card p-4" style="background-color:#ffffff;box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
              <h1 class="mt-2">Tambah Admin</h1>
              <hr class=" " style="height: 2px;">

          </div>
      </div>
      <div class="col-12">
          <div class="card p-4 mt-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
              <div class="row mt-1">
                <form action="{{ route('admin.store') }}" method="post">
                  @csrf
                  <br>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-6">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" id="name" placeholder="Nama" name="name">
                          @error('name')
                        <div class="invalid-feedback">{{$message}}</div>            @enderror
                      </div>
                      <div class="col-6">
                        <label class="form-label">NIM</label>
                        <input type="number" class="form-control form-control-lg @error('nim') is-invalid @enderror" id="nim" placeholder="NIM" name="nim">
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
                  <div class="form-group">
                    <div class="row">
                      <div class="col-12">
                        <div class="input-group mb-3">
                          <select class="form-select form-select-lg" id="inputGroupSelect01" name="role_id">
                              @foreach($roles as $role)
                                  <option value="{{$role->id}}">{{$role->role}}</option>
                              @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>

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
              </div>
          </div>
      </div>
  </div>
</div>

@endsection
