<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Form Pendaftaran Kegiatan</h1>

    <form action="/registration-program" method="post" enctype="multipart/form-data">
        @csrf
        <label for="program">Kegiatan :</label>
        <select id="program" name="program_id"> 
            @foreach ($programs as $program)
                <option value="{{ $program->program_id }}">{{ $program->title }}</option>
            @endforeach
        </select><br>
        
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

        <label for="file">Upload file:</label><br>
        <input type="file" name="file" id="file" accept=".pdf" required><br>

        <label for="reason">Alasan mengikuti kegiatan:</label><br>
        <textarea id="reason" name="reason" rows="3" required></textarea><br>

        <input type="submit" value="Submit">
    </form>

    @if (session()->has('success'))
        <p style="color: green">{{ session('success') }}</p>    
    @endif

    @error('file')
        <p style="color: red">{{ $message }}</p>
    @enderror
</body>
</html>