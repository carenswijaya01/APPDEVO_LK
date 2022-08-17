<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Detail Pengumuman</title>

    <!-- include summernote css/js-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
</head>

<body>
    <div class="row mt-2 p-4">
        <div class="container">
            <div class="row justify-content-center">
                <h3 class="text-center">Kegiatan</h3>
                <h1 class="text-center text-uppercase">{{$pengumuman->judul}}</h1>

                <div class="mt-4 row align-items-start d-inline-block">
                    <img src="{{ asset('storage/' . $pengumuman->gambar) }}" style="width: 500px;" class="img-thumbnail" alt="...">
                    <div class="">
                        <h2>{{$pengumuman->judul}}</h2>
                        <h5>Tanggal Post : {{$pengumuman->created_at->toDateString()}}</h5>
                        <h5>Penyelenggara : {{$pengumuman->penyelenggara}}</h5>

                        <article>
                            {!! $pengumuman->deskripsi !!}
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
