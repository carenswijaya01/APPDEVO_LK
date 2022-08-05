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
        {{-- nanti bedasarkan program_id --}}
        <label for="program">Kegiatan :</label>
        <select id="program" name="program_id"> 
            <option value="1">LDKM</option>
            <option value="2">OMB</option>
            <option value="3">FTI Days</option>
        </select><br>
        
        <input type="hidden" name="user_id" value="">

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