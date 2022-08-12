<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Data</title>
</head>
<body>
    <h1> Edit Data</h1>
    <ul>
        <form action="{{ route('admin.update',$admin->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input type="hidden" name='id' id="id" >
            <label for="nim">NIM</label> 
            <input type="text" name="nim" id="nim" placeholder="Enter your NIM" required value="{{$admin->nim}}">
            <br>
            <label for="name">Nama</label> 
            <input type="text" name="name" id="name" placeholder="Enter your name" required value="{{$admin->name}}">
            <br>
            <label for="email">Email</label>  
            <input type="email" name="email" id="email" placeholder="Enter your email address" required value="{{$admin->email}}">
            <br>    
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required value="{{$admin->password}}">
            <br>
            <label for="password2">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" id="password2" placeholder="Confirm your password" required value="{{$admin->password}}">
            <br>
            <input type="submit" name="Update" value="Edit Akun">
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
</body>
</html>