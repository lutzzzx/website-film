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
        <p >Sign Out</p>
      </div>
    </div>
  </nav>

  <!-- Konten Utama -->
  <main class="container mb-5" style="margin-top: 110px">
    <div class="d-flex flex-wrap gap-4">
      <div class="card-movie">
        <a href=""><img src="../assets/images/background.jpg" alt="" class="img-wrapper mb-3"></a> <!-- Link menuju film -->
        <div class="d-flex w-100 gap-2 justify-content-between">
          <p class="mb-2 w-75">Judul Film sdfsdf sdf saf sdfsdf</p>
          <a href="" class="w-25">  <!-- Link agar menghapus film dari daftar -->
            <img src="../assets/images/trash-bin.png" alt="hapus" width="40px">
          </a>
        </div>
      </div>
      <div class="card-movie">
        <a href=""><img src="../assets/images/background.jpg" alt="" class="img-wrapper mb-3"></a> <!-- Link menuju film -->
        <div class="d-flex w-100 gap-2 justify-content-between">
          <p class="mb-2 w-75">Judul Film sdfsdf sdf saf sdfsdf</p>
          <a href="" class="w-25">  <!-- Link agar menghapus film dari daftar -->
            <img src="../assets/images/trash-bin.png" alt="hapus" width="40px">
          </a>
        </div>
      </div>
    </div>
  </main>


    <!--MODAL KONFIRMASI Hapus film dari watchlist-->
    <div class="modal"> <!-- Tambahkan class "Show" untuk menampilkan modal -->
    <div class="modal-content card bg-dark text-center d-flex flex-column align-items-center justify-content-center">
      <p class="mb-5">Hapus film dari watchlist?</p>
      <div class="d-flex gap-5">
        <input type="submit" value="Ya" class="btn btn-primary px-5 py-2">
        <input type="submit" name="close" value="Tidak" class="btn btn-light px-5 py-2">
      </div>
    </div>
  </div> 


  <!--MODAL KONFIRMASI LOGOUT-->
  <div class="modal"> <!-- Tambahkan class "Show" untuk menampilkan modal -->
    <div class="modal-content card bg-dark text-center d-flex flex-column align-items-center justify-content-center">
      <p class="mb-5">Ingin keluar sekarang?</p>
      <div class="d-flex gap-5">
        <input type="submit" value="Ya" class="btn btn-primary px-5 py-2">
        <input type="submit" name="close" value="Tidak" class="btn btn-light px-5 py-2">
      </div>
    </div>
  </div> 

</body>
</html>