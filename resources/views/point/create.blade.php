@extends('template')
@section('content')


<div class="container-2xxl">
  <div class="row mt-1">
      <div class="col-12">
          <div class="card p-4" style="background-color:#ffffff;box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
              <h1 class="mt-2">Input Poin</h1>
              <hr class=" " style="height: 2px;">
             
          </div>
      </div>
      <div class="col-12">
          <div class="card p-4 mt-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
              <div class="row mt-1">
                <form method="POST" action="{{route('points.store')}}" enctype="multipart/form-data" class="">
                  @csrf
                  <div class="row">
                  <div class="col-20">
                  <label for="user" class="form-label">Mahasiswa</label>
                  <select name="user_id" class="form-select" id="user">
                      @foreach ($users as $user)
                      <option value="{{$user->id}}">{{$user->name}}</option>
                      @endforeach
                  </select><br>
                  </div>
                  </div>
                  <div class="col-75">
                  <input type="file" name="file" accept=".pdf" class="btn"><br />
                  </div>
                  <br>
                  <label for="title">Tipe Poin</label>
                  <select name="type_point_id" class="form-select">
                      @foreach ($typePoints as $point)
                      <option value="{{ $point->id}}">{{ $point->name}}</option>
                      @endforeach
                  </select><br>
                  Poin : <input type="number" class="form-control" name="point"><br />
                  <button type="submit" class="btn text-light" style="background:#003289">Simpan</button>
              </form>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection