<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
  
<!-- NAVBAR -->
  <nav class="fixed-top bg-primary p-3">
    <div class="container">
      <div class="navbar">
        <a href="../index.php"><img src="../assets/images/home.png" alt="" width="25px"></a>
        <div class="d-flex gap-5">
          <a href="watchlist-page.php"><p>Watchlist</p></a>
          <a href="../assets/php/logout.php"><p>Sign Out</p></a>
        </div>
      </div>
    </div>
  </nav>


  <!-- Bagian Utama -->
  <main class="container mb-5 bg-dark" style="margin-top: 100px; height: calc(100vh - 150px)">
    <div class="mb-4 position-fixed bg-dark w-100" style="top: 0px; padding-top: 100px;">
      <a href=""><button class="btn btn-primary mb-3">Masukkan ke watchlist</button></a>
      <h1>Black Widow</h1>
    </div>
    <div class="d-flex gap-5 w-100" style="margin-top: 220px;">
      <div class="w-25 position-fixed" style="width: 300px"> <!-- Bagian Kiri -->
        <img src="../assets/images/black-widow.jpeg" alt="" class="img-wrapper" style="height: 100%; max-height: 65vh;">
      </div>
      <div class="w-75 overflow-auto" style="margin-left: 350px"> <!-- Bagian Kanan -->
        <div class="text-justify mb-5">
          <h3 class="mb-3">Sinopsis Film Black Widow</h3>
          Dalam film penuh aksi dari Marvel Studios, sinopsis Black Widow ini berkisah tentang Natasha Romanoff yang harus menghadapi sisi gelap hidupnya.Apalagi saat itu terdapat sebuah konspirasi berbahaya yang dikaitkan dengan masa lalunya.Natasha dikejar oleh sesuatu yang tidak akan berhenti sampai berhasil menghancurkan hidupnya.Natasha juga harus kembali pada kenyataan bahwa dirinya adalah seorang mata-mata dan hubungan keluarganya yang hancur jauh sebelum bergabung bersama Avengers.Pada titik ini, dia berhadapan langsung dengan masa lalunya yang kelam dan orang-orang yang terhubung dengannya.Saat dia mencoba berhubungan kembali dengan ‘keluarganya’, Romanoff menemukan dirinya di tengah konspirasi berbahaya.Scarlett Johansson kembali memerankan Natasha/Black Widow, Florence Pugh sebagai Telena, David Harbour memerankan Alexei/The Red Guardian, and Rachel Weisz sebagai Melina.
        </div>
        <div class="d-flex gap-5 justify-content-center mb-5">
          <a href="" class="bg-primary btn px-5 py-2 d-flex gap-3"> <!-- Tombol Like -->
            <img src="../assets/images/like.png" alt="" width="16px">
            <p>1</p>
          </a>
          <a href="" class="bg-primary btn px-5 py-2 d-flex gap-3"> <!-- Tombol Like -->
            <img src="../assets/images/dislike.png" alt="" width="16px">
            <p>123</p>
          </a>
        </div>
        <p>Tambahkan Review</p>
        <form action="" method="">
          <div class="d-flex gap-3 mb-4">
            <input type="text" class="input-form bg-dark">
            <input type="submit" value="Kirim" class="btn btn-primary">
          </div>
        </form>
        <p>Review lainnya</p>
        <div class="comment-wrapper p-4 d-flex flex-column gap-3">
          <div class="comment">
            <p><b>Nama</b></p>
            <p>Filmnya bagus sekali</p>
          </div>
          <hr style="border: 1px solid gray">
          <div class="comment">
            <p><b>Nama</b></p>
            <p>B aja si</p>
          </div>
        </div>
      </div>
    </div>
  </main>


  <!-- Berhasil ditambahkan ke watchlist -->
  <div class="modal"> <!-- Tambahkan class "Show" untuk menampilkan modal -->
    <div class="modal-content card bg-dark text-center d-flex flex-column align-items-center justify-content-center">
      <p class="mb-5">Film telah ditambahkan ke watchlist</p>
      <input type="submit" name="close" value="OK" class="btn btn-primary px-6 py-2">
    </div>
  </div>

      <!-- Gagal ditambahkan ke watchlist -->
  <div class="modal"> <!-- Tambahkan class "Show" untuk menampilkan modal -->
    <div class="modal-content card bg-dark text-center d-flex flex-column align-items-center justify-content-center">
      <img src="../assets/images/warning.png" alt="" width="70px">
      <h2 class="color-primary mb-2">Gagal Menambahkan</h2>
      <p class="mb-3">Mohon hubungi Administrator!</p>
      <input type="submit" name="close" value="OK" class="btn btn-primary px-6 py-2">
    </div>
  </div>

    <!-- Berhasil Menambahkan review -->
  <div class="modal"> <!-- Tambahkan class "Show" untuk menampilkan modal -->
    <div class="modal-content card bg-dark text-center d-flex flex-column align-items-center justify-content-center">
      <p class="mb-5">Terima kasih sudah menambahkan review</p>
      <input type="submit" name="close" value="OK" class="btn btn-primary px-6 py-2">
    </div>
  </div>

</body>
</html>