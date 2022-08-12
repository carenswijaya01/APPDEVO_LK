<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");
      * {
        font-family: "Poppins", sans-serif;
      }
    </style>
    <title>Registrasi Anggota Kepanitiaan</title>
  </head>
  <body>
    <form class="row g-3">
      <div class="p-3 mb-2 bg-secondary text-white">
        <br><h1>Form Registrasi Anggota Kepanitiaan</h1><br>
        <div class="mb-3">
          <label for="validationDefault01" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="validationDefault01" placeholder="Masukkan Nama Lengkap" required>
        </div>
        <div>
          <label for="validationDefault02" class="form-label">Nomor Induk Mahasiswa</label>
          <input type="tel" class="form-control" id="validationDefault02" placeholder="Masukkan NIM (9 Karakter)" pattern="^\d{9}$" required><br>
        </div>
        <div class="mb-3">
          <label for="validationDefault03" class="form-label">Email</label>
          <input type="email" class="form-control" id="validationDefault03" placeholder="name@example.com" required>
        </div>
        <div class="mb-3">
          <label for="validationDefaultKTM" class="form-label">Input Kartu Tanda Mahasiswa</label>
          <input class="form-control" type="file" id="validationDefaultKTM" accept="application/pdf" required>
        </div>
        <div class="mb-3">
          <label for="validationDefaultOMB" class="form-label">Input Sertifikat OMB</label>
          <input class="form-control" type="file" id="formFile" accept="application/pdf" required>
        </div>
        <div class="mb-3">
          <label for="validationDefaultLDKM" class="form-label">Input Sertifikat LDKM</label>
          <input class="form-control" type="file" id="validationDefaultLDKM" accept="application/pdf" required>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
      </div>
    </form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>