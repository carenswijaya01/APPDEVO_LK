<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pengumuman</title>

    <!-- include summernote css/js-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
</head>

<body>
    <h2 class="text-center mt-4">PENGUMUMAN</h2>

    <button type="button" class="btn btn-primary mb-2 ms-2 mt-4" data-bs-toggle="modal" data-bs-target="#tambah_pengumuman">
        Tambah Pengumuman
    </button>

    <table class=" table align-middle">
        <thead class="table-dark">
            <tr>
                <td class="col-1">No</td>
                <td>Judul</td>
                <td>Penyelenggara</td>
                <td class="col-2">Aksi</td>
            </tr>
        </thead>
        <tbody>
            @php
            $i = 1;
            @endphp
            @foreach ($pengumuman as $p)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$p->judul}}</td>
                <td>{{$p->penyelenggara}}</td>
                <td>
                    <button class="btn btn-primary">Detail</button>
                    <button class="btn btn-warning">Edit</button>
                    <button class="btn btn-danger">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="modal fade" id="tambah_pengumuman" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="border-radius:20px 20px 20px 20px">
                <form action="{{ route('pengumuman.store') }}" enctype="multipart/form-data" method="POST" class="p-4">
                    @csrf

                    @if($errors->any())
                    @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                    @endforeach
                    @endif

                    <h3 class="text-center" style="color: #2D3F9F;">Tambah Pengumuman</h3>
                    <hr class="mt-4" style="color: #F0803C; height: 2px;">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="judul" class="form-label">Judul Kegiatan</label>
                                <input type="text" class="form-control form-control-md" id="judul" placeholder="" name="judul" value="" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="penyelenggara" class="form-label mt-2">Penyelenggara</label>
                                <input type="text" class="form-control form-control-md" id="penyelenggara" placeholder="" name="penyelenggara" value="" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="gambar" class="form-label mt-2">Poster Kegiatan</label>
                                <input type="file" class="form-control" id="gambar" name="gambar" required>
                            </div>
                        </div>
                    </div>

                    <h5 class="mt-4" style="color: #2D3F9F;">Deskripsi Kegiatan</h5>
                    <div class="form-group">
                        <textarea id="summernote" name="deskripsi"></textarea>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <button type="submit" name="submit" id="simpan" class="btn btn-primary mr-1 mx-2" style="float: right">Simpan</button>
                            <button type="button" id="batal" class="btn btn-danger mr-2" data-bs-dismiss="modal" style="float: right">Batal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(' #summernote').summernote({
                height: 300,
            });
        });
    </script>
</body>

</html>