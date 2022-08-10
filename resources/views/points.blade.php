<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POINTS</title>
</head>
<body>
<div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">POINS</h3>
                            <br/>
 
                            {{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
 
                            <br/>
                             <!-- form validasi -->
                            <form action="/points/store" method="post">
                                {{ csrf_field() }}
 
                                <div class="form-group">
                                    <label for="point_id">point_id</label>
                                    <input class="form-control" type="text" name="point_id" value="{{ old('point_id') }}">
                                </div>
                                <div class="form-group">
                                    <label for="admin_id">admin_id</label>
                                    <input class="form-control" type="text" name="admin_id" value="{{ old('admin_id') }}">
                                </div>
                                <div class="form-group">
                                    <label for="user_id">User_id</label>
                                    <input class="form-control" type="text" name="user_id" value="{{ old('user_id') }}">
                                </div>
                                <div class="form-group">
                                    <label for="file">file</label>
                                    <input class="form-control" type="text" name="file" value="{{ old('file') }}">
                                </div>
                                <div class="form-group">
                                    <label for="type_point_id">type_point_id</label>
                                    <input class="form-control" type="text" name="type_point_id" value="{{ old('type_point_id') }}">
                                </div>
                                <div class="form-group">
                                    <label for="point">point</label>
                                    <input class="form-control" type="text" name="point" value="{{ old('point') }}">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Proses">
                                </div>
                            </form>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</body>
</html>
