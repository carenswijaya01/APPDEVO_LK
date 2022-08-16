<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="css/form pendaftaran.css" rel="stylesheet">

<body>

  <form id="regForm" action="/action_page.php">
    <h2>
      <center>REGISTRASI ANGGOTA KEPANITIAAN</center>
    </h2>
    <!-- One "tab" for each step in the form: -->
    <div class="tab"><strong>Data Diri:</strong>
      <p><input placeholder="Nama Lengkap" oninput="this.className = ''" name="nama"></p>
      <p><input placeholder="Nomor Induk Mahasiswa" oninput="this.className = ''" name="nim"></p>
      <p><input placeholder="E-mail" oninput="this.className = ''" name="email"></p>
      <p><select class="form-select form-select-lg mb-3" class="required" aria-label=".form-select-lg example">
          <option selected>Kegiatan Kepanitiaan</option>
          <option value="1">Kegiatan 1</option>
          <option value="2">Kegiatan 2</option>
          <option value="3">Kegiatan 3</option>
        </select>
      </p>
    </div>

    <div class="tab"><strong>Lampiran (Dalam pdf):</strong>
      <p>Sertifikat OMB<input type="file" accept="application/pdf" name="file_omb" class="form-control" id="file_omb"></p>
      <p>Sertifikat LDKM<input type="file" accept="application/pdf" name="file_ldkm" class="form-control" id="file_ldkm"></p>
      <p>Kartu Tanda Mahasiswa<input type="file" accept="application/pdf" name="file_ktme" class="form-control" id="file_ktm"></p>
    </div>
    <div class="tab">Alasan :
      <p><input type="text" placeholder="Alasan Mengikuti Kegiatan Kepanitiaan" oninput="this.className = ''" name="phone"></p>
    </div>
    <div style="overflow:auto;">
      <div style="float:right;">
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
      </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
    </div>
  </form>
  <script src="js/form pendaftaran.js"></script>

</body>

</html>