<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Data Kegiatan</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <meta name="theme-color" content="#712cf9">
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

<body class="">
    <div class="row mt-4 p-4">
        <form action="{{ route('simpanKegiatan')}}" method="post">
            {{ csrf_field() }}
            <h1 class="h3 mb-3 fw-normal text-center">Masukkan Data Kegiatan</h1>
            <div class="row justify-content-center">
                <div class="card col-6 p-4 ">
                    <div class="row justify-content-center">
                        <div class="row justify-content-center">
                            <div class="form-floating col-6">
                                <input type="text" class="form-control form-control-sm col-6" id="floatingInput" placeholder="Masukkan Nama Kegiatan" name="nama_kegiatan" required>
                                <label for="floatingInput" class="mx-2">Nama Kegiatan</label>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-2">
                            <div class="form-group col-6">
                               
                                <select class="form-select form-control-sm" aria-label="" name="jenis_kegiatan">
                                    <option>Jenis Kegiatan</option>
                                    <option>Terstruktur</option>
                                    <option>Non-Terstruktur</option>
                                </select>
                            </div>
                        </div>
                 
                        <div class="row justify-content-center mt-2">
                            <div class="form-floating col-6">
                                <input type="text" class="form-control form-control-sm col-6" id="floatingNama" placeholder="Masukkan Nama Ketua Panitia" name="nama_ketua_panitia" required>
                                <label for="floatingNama" class="mx-2">Nama Ketua Panitia</label>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-2">
                            <div class="form-floating col-6">
                                <input type="date" min="<?= date("Y-m-d"); ?>" class="form-control form-control-sm col-6" id="floatingInput" placeholder="" name="tgl_kegiatan" required>
                                <label for="floatingInput" class="mx-2">Waktu Pelaksanaan</label>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-2">
                            <div class="form-floating col-6">
                                <textarea type="text" class="form-control form-control-sm col-6" id="deskripsi_kegiatan" name="deskripsi_kegiatan" rows="3" required></textarea>
                                <label for="floatingInput" class="mx-2">Deskripsi Kegiatan</label>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <a href="{{url('/daftarKegiatan')}}" class="btn btn-danger mt-4 col-2 mx-2">Cancel</a>
                        <button class="btn btn-md btn-dark mt-4 col-3 " type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>