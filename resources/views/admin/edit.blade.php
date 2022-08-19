<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Data</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</head>

<body>
<main class="form-signin">
    <ul>
        <div class="poin-content px-5 pt-3">
            <div class="poin-content px-3 pt-2">
              <div class="container">
                <span class="text-center">
                    <h2>Edit Data</h2>
                  </span>
        <form action="{{ route('admin.update',$admin->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-floating">
                <input type="hidden" class="form-control" name='id' id="id">
                <br>
                <label for="nim"></label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control"name="nim" id="nim" placeholder="Enter your NIM" required value="{{$admin->nim}}">
                <br>
                <label for="name"></label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control"name="name" id="name" placeholder="Enter your name" required
                       value="{{$admin->name}}">
                <br>
                <label for="email"></label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control"name="email" id="email" placeholder="Enter your email address" required
                       value="{{$admin->email}}">
                <br>
                <label for="password"></label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control"name="password" id="password" placeholder="Enter your password">
                <br>
                <label for="password2"></label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control"name="password_confirmation" id="password2" placeholder="Confirm your password">
                <br>
                <input type="submit" name="Update" value="Edit Akun" class="btn btn-dark">
            </div>
        </form>
        <br>


        <a href="{{route('admin.index')}}">Kembali</a>


        @if($errors->any())
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif
        @if (session('success'))
            <p>{{session('success')}}</p>
    @endif
             </div>
            </div>
        </div>

</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
        crossorigin="anonymous"></script>
<script src="/js/dashboard.js"></script>
</body>

</html>
