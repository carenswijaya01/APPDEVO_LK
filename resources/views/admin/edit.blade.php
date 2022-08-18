<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Data</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <main class="form-signin">
    <h1> Edit Data</h1>
    <ul>
        <form action="{{ route('admin.update',$admin->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-floating">
            <input type="hidden"  class="form-control" name='id' id="id" >
            <br>
            <label for="nim"></label>
            </div>
            <div class="form-floating">
            <input type="text" name="nim" id="nim" placeholder="Enter your NIM" required value="{{$admin->nim}}">
            <br>
            <label for="name"></label>
            </div>
            <div class="form-floating">
            <input type="text" name="name" id="name" placeholder="Enter your name" required value="{{$admin->name}}">
            <br>
            <label for="email"></label>
            </div>
            <div class="form-floating">
            <input type="email" name="email" id="email" placeholder="Enter your email address" required value="{{$admin->email}}">
            <br>
            <label for="password"></label>
            </div>
            <div class="form-floating">
            <input type="password" name="password" id="password" placeholder="Enter your password">
            <br>
            <label for="password2"></label>
            </div>
            <div class="form-floating">
            <input type="password" name="password_confirmation" id="password2" placeholder="Confirm your password">
            <br>
            <input type="submit" name="Update" value="Edit Akun">
            </div>
        </form>
        <form action="{{ route('admin.index') }}" method="GET">
            @csrf
            @method('put')
            <input type="submit" name="kembali" value="Kembali">
        </form>
        <br><br><br>


        @if($errors->any())
        @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
        @endif
        @if (session('success'))
        <p>{{session('success')}}</p>
        @endif

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="/js/dashboard.js"></script>
</body>

</html>
