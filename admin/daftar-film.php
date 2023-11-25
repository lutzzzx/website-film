<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Film</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- NAVBAR -->
  <nav class="container py-4 position-fixed" style="padding-left: 190px; top: 0;">
    <a href="index.php"><img src="../assets/images/clapperboard.png" alt="" width="50px"></a>
  </nav>

  <div class="container d-flex" style="margin-top: 100px">
    <aside class=" position-fixed d-flex flex-column justify-content-between" style="width: 220px; height: 80vh">
      <div class="d-flex flex-column gap-4">
        <a href="index.php" class="bg-gray p-3 w-100 d-flex justify-content-between decoration-none">
          <p>Dashboard</p>
          <img src="../assets/images/right-arrow.png" alt="" width="18px">
        </a>
        <hr style="border: 1px solid gray">
        <a href="daftar-film.php" class="bg-primary p-3 w-100 d-flex justify-content-between decoration-none">
          <p>Film</p>
          <img src="../assets/images/right-arrow.png" alt="" width="18px">
        </a>
        <a href="tambah-film.php" class="bg-gray p-3 w-100 d-flex justify-content-between decoration-none">
          <p>Tambah Film</p>
          <img src="../assets/images/right-arrow.png" alt="" width="18px">
        </a>
        <hr style="border: 1px solid gray">
        <a href="daftar-user.php" class="bg-gray p-3 w-100 d-flex justify-content-between decoration-none">
          <p>User</p>
          <img src="../assets/images/right-arrow.png" alt="" width="18px">
        </a>
      </div>
      <a href="" class="d-flex gap-2 decoration-none">
        <img src="../assets/images/leave.png" alt="" class="w-25">
        <div  class="bg-gray p-3 w-75 d-flex justify-content-between">
          <p>Logout</p>
          <img src="../assets/images/right-arrow.png" alt="" width="18px">
        </div>
      </a>
    </aside>

    
    <!--Bagian Utama -->
    <main class="w-100 mb-5" style="margin-left: 280px;">
      <h1>Daftar Film</h1>
      <a href="tambah-film.php"><button  class="btn btn-primary mt-3 mb-5">Tambah Film</button></a> <br>
      <table class="w-100">
        <tr>
          <th>Poster</th>
          <th>Judul</th>
          <th>Sinopsis</th>
          <th>Aksi</th>
        </tr>
        <tr>
          <td style="width: 15%"><img src="../assets/images/black-widow.jpeg" alt="" width="125px"></td>
          <td style="width: 15%">Black Widow</td>
          <td style="width: 55%"><p class="sinopsis">Dalam film penuh aksi dari Marvel Studios, sinopsis Black Widow ini berkisah tentang Natasha Romanoff yang harus menghadapi sisi gelap hidupnya.Apalagi saat itu terdapat sebuah konspirasi berbahaya yang dikaitkan dengan masa lalunya.Natasha dikejar oleh sesuatu yang tidak akan berhenti sampai berhasil menghancurkan hidupnya.Natasha juga harus kembali pada kenyataan bahwa dirinya adalah seorang mata-mata dan hubungan keluarganya yang hancur jauh sebelum bergabung bersama Avengers.Pada titik ini, dia berhadapan langsung dengan masa lalunya yang kelam dan orang-orang yang terhubung dengannya.Saat dia mencoba berhubungan kembali dengan ‘keluarganya’, Romanoff menemukan dirinya di tengah konspirasi berbahaya.Scarlett Johansson kembali memerankan Natasha/Black Widow, Florence Pugh sebagai Telena, David Harbour memerankan Alexei/The Red Guardian, and Rachel Weisz sebagai Melina.</p></td>
          <td style="width: 15%">
            <div class="d-flex flex-column gap-3">
              <a href=""><button class="btn btn-primary w-100">Edit</button></a>
              <a href=""><button class="btn btn-primary w-100">hapus</button></a>
            </div>
          </td>
        </tr>
        <tr>
          <td style="width: 15%"><img src="../assets/images/black-widow.jpeg" alt="" width="125px"></td>
          <td style="width: 15%">Black Widow</td>
          <td style="width: 55%"><p class="sinopsis">Dalam film penuh aksi dari Marvel Studios, sinopsis Black Widow ini berkisah tentang Natasha Romanoff yang harus menghadapi sisi gelap hidupnya.Apalagi saat itu terdapat sebuah konspirasi berbahaya yang dikaitkan dengan masa lalunya.Natasha dikejar oleh sesuatu yang tidak akan berhenti sampai berhasil menghancurkan hidupnya.Natasha juga harus kembali pada kenyataan bahwa dirinya adalah seorang mata-mata dan hubungan keluarganya yang hancur jauh sebelum bergabung bersama Avengers.Pada titik ini, dia berhadapan langsung dengan masa lalunya yang kelam dan orang-orang yang terhubung dengannya.Saat dia mencoba berhubungan kembali dengan ‘keluarganya’, Romanoff menemukan dirinya di tengah konspirasi berbahaya.Scarlett Johansson kembali memerankan Natasha/Black Widow, Florence Pugh sebagai Telena, David Harbour memerankan Alexei/The Red Guardian, and Rachel Weisz sebagai Melina.</p></td>
          <td style="width: 15%">
            <div class="d-flex flex-column gap-3">
              <a href=""><button class="btn btn-primary w-100">Edit</button></a>
              <a href=""><button class="btn btn-primary w-100">hapus</button></a>
            </div>
          </td>
        </tr>
        <tr>
          <td style="width: 15%"><img src="../assets/images/black-widow.jpeg" alt="" width="125px"></td>
          <td style="width: 15%">Black Widow</td>
          <td style="width: 55%"><p class="sinopsis">Dalam film penuh aksi dari Marvel Studios, sinopsis Black Widow ini berkisah tentang Natasha Romanoff yang harus menghadapi sisi gelap hidupnya.Apalagi saat itu terdapat sebuah konspirasi berbahaya yang dikaitkan dengan masa lalunya.Natasha dikejar oleh sesuatu yang tidak akan berhenti sampai berhasil menghancurkan hidupnya.Natasha juga harus kembali pada kenyataan bahwa dirinya adalah seorang mata-mata dan hubungan keluarganya yang hancur jauh sebelum bergabung bersama Avengers.Pada titik ini, dia berhadapan langsung dengan masa lalunya yang kelam dan orang-orang yang terhubung dengannya.Saat dia mencoba berhubungan kembali dengan ‘keluarganya’, Romanoff menemukan dirinya di tengah konspirasi berbahaya.Scarlett Johansson kembali memerankan Natasha/Black Widow, Florence Pugh sebagai Telena, David Harbour memerankan Alexei/The Red Guardian, and Rachel Weisz sebagai Melina.</p></td>
          <td style="width: 15%">
            <div class="d-flex flex-column gap-3">
              <a href=""><button class="btn btn-primary w-100">Edit</button></a>
              <a href=""><button class="btn btn-primary w-100">hapus</button></a>
            </div>
          </td>
        </tr>
      </table>
    </main>
  </div>

      <!--MODAL KONFIRMASI Hapus film-->
  <div class="modal"> <!-- Tambahkan class "Show" untuk menampilkan modal -->
    <div class="modal-content card bg-dark text-center d-flex flex-column align-items-center justify-content-center">
      <p class="mb-5">Yakin menghapus film?</p>
      <div class="d-flex gap-5">
        <input type="submit" value="Ya" class="btn btn-primary px-5 py-2">
        <input type="submit" name="close" value="Tidak" class="btn btn-light px-5 py-2">
      </div>
    </div>
  </div> 

    <!-- Hapus Sukses -->
  <div class="modal"> <!-- Tambahkan class "Show" untuk menampilkan modal -->
    <div class="modal-content card bg-dark text-center d-flex flex-column align-items-center justify-content-center">
      <p class="mb-5">Film telah dihapus!</p>
      <input type="submit" name="closeSuccess" value="OK" class="btn btn-primary px-6 py-2">
    </div>
  </div>


</body>
</html>