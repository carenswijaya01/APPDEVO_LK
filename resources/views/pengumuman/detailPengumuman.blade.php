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
                    <img src="https://scontent.fcgk6-2.fna.fbcdn.net/v/t39.30808-6/241083650_4459425754079669_5859393618455343271_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=a26aad&_nc_eui2=AeGOyd5VNWeIRPJpF_yskBb9MiqLLyRA5rgyKosvJEDmuMr74cnxK5m_5sGlr_pSoS6HPIj7WAl58d2686hzfiEs&_nc_ohc=0V0E-nkod-IAX_z8pds&_nc_ht=scontent.fcgk6-2.fna&oh=00_AT_H5aZlVPowty_p-6ibML1QBrfvepV3HaqIDihakouK6A&oe=62FDABEC" style="width: 500px;" class="img-thumbnail" alt="...">
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