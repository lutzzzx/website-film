<?php
include('../assets/php/database.php');
session_start();
$modalConfirw = "";
$modalFailw = "";

$id_user = $_SESSION['id_user'];
$id_film = $_GET['id'];

// SELECT FILM
$sql = "SELECT * FROM film WHERE id = '$id_film'";
$query = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($query);

// SELECT LIKE
$sqllike = "SELECT COUNT(*) AS jumlah_like FROM suka WHERE id_film = '$id_film'";
$querylike = mysqli_query($connect, $sqllike);
$result = mysqli_fetch_assoc($querylike);

if($result){
  $jumlahLike = $result['jumlah_like'];
} else {
  $jumlahLike = 0;
}

// SELECT DISLIKE
$sqldislike = "SELECT COUNT(*) AS jumlah_dislike FROM unsuka WHERE id_film = '$id_film'";
$querydislike = mysqli_query($connect, $sqldislike);
$resultdislike = mysqli_fetch_assoc($querydislike);

if($resultdislike){
  $jumlahDislike = $resultdislike['jumlah_dislike'];
} else {
  $jumlahDislike = 0;
}

//SELECT KOMENTAR
$sqlcom = "SELECT user.nama, komentar.komentar FROM komentar JOIN user ON komentar.id_user = user.id WHERE komentar.id_film = '$id_film'";
$querycom = mysqli_query($connect, $sqlcom);

//MODAL CONFIRMATION
if (isset($_GET['modalConfirw'])){
  $modalConfirw = "show";
  $id_film = $_GET['id'];
  $id_user = $_SESSION['id_user'];
  $_SESSION['id_film'] = $id_film;

  $sqlcek = "SELECT * FROM watchlist WHERE id_film = '$id_film' AND id_user = '$id_user'";
  $querycek = mysqli_query($connect, $sqlcek);

  if(mysqli_num_rows($querycek) == 0){
    $sqlw = "INSERT INTO watchlist (id_film, id_user) VALUES ('$id_film','$id_user')";
    $queryw = mysqli_query($connect, $sqlw);
  } else {
    $modalFailw = "show";
  }
}

if (isset($_POST['close'])){
  $id_film = $_SESSION['id_film'];
  $modalConfirw = "";
  $modalFailw = "";
  header("location: detail-film.php?id=$id_film");
  session_unset($_SESSION['id_film']);
}
?>

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
      <a href="../assets/php/addWatchlist.php?id=<?= $row['id']; ?>"><button class="btn btn-primary mb-3">Masukkan ke watchlist</button></a>
      <h1><?= $row['judul']; ?></h1>
    </div>
    <div class="d-flex gap-5 w-100" style="margin-top: 220px;">
      <div class="w-25 position-fixed" style="width: 300px"> <!-- Bagian Kiri -->
        <img src="../<?= $row['foto']; ?>" alt="" class="img-wrapper" style="height: 100%; max-height: 65vh;">
      </div>
      <div class="w-75 overflow-auto" style="margin-left: 350px"> <!-- Bagian Kanan -->
        <div class="text-justify mb-5">
          <h3 class="mb-3">Sinopsis Film <?= $row['judul']; ?></h3>
          <?= $row['deskripsi']; ?>
        </div>
        <div class="d-flex gap-5 justify-content-center mb-5">
          <a href="../assets/php/like.php?id=<?= $row['id']; ?>" class="bg-primary btn px-5 py-2 d-flex gap-3"> <!-- Tombol Like -->
            <img src="../assets/images/like.png" alt="" width="16px">
            <p><?php echo $jumlahLike ?></p>
          </a>
          <a href="../assets/php/dislike.php?id=<?= $row['id']; ?>" class="bg-primary btn px-5 py-2 d-flex gap-3"> <!-- Tombol Like -->
            <img src="../assets/images/dislike.png" alt="" width="16px">
            <p><?php echo $jumlahDislike ?></p>
          </a>
        </div>
        <p>Tambahkan Review</p>
        <form action="../assets/php/addKomen.php?id_film=<?=$id_film;?>" method="POST">
          <div class="d-flex gap-3 mb-4">
            <input type="text" name="inpKomen" class="input-form bg-dark">
            <input type="submit" name="submKomen" value="Kirim" class="btn btn-primary">
          </div>
        </form>
        <p>Review lainnya</p>
        <div class="comment-wrapper p-4 d-flex flex-column gap-3">
          <?php while($com = mysqli_fetch_assoc($querycom)) { ?>
          <div class="comment">
            <p><b><?= $com['nama']; ?></b></p>
            <p><?= $com['komentar']; ?></p>
          </div>
          <hr style="border: 1px solid gray">
          <?php } ?>
        </div>
      </div>
    </div>
  </main>


  <!-- Berhasil ditambahkan ke watchlist -->
  <div class="modal <?= $modalConfirw ?>"> <!-- Tambahkan class "Show" untuk menampilkan modal -->
    <div class="modal-content card bg-dark text-center d-flex flex-column align-items-center justify-content-center">
      <p class="mb-5">Film berhasil ditambahkan ke watchlist</p>
      <form action="detail-film.php" method="POST">
        <input type="submit" name="close" value="OK" class="btn btn-primary px-6 py-2">
      </form>
    </div>
  </div>

      <!-- Gagal ditambahkan ke watchlist -->
  <div class="modal <?= $modalFailw ?>"> <!-- Tambahkan class "Show" untuk menampilkan modal -->
    <div class="modal-content card bg-dark text-center d-flex flex-column align-items-center justify-content-center">
      <img src="../assets/images/warning.png" alt="" width="70px">
      <h2 class="color-primary mb-2">Gagal Menambahkan</h2>
      <p class="mb-3">Film ini sudah ada di watchlist Anda!</p>
      <form action="detail-film.php" method="POST">
        <input type="submit" name="close" value="OK" class="btn btn-primary px-6 py-2">
      </form>
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