<?php
include('../assets/php/database.php');
session_start();

if(!isset($_SESSION['id_user'])){
  header("location: login-page.php");
}

$id_user = $_SESSION['id_user'];
$modalConfir = "";
$modalLogout = "";

$sql = "SELECT film.id, film.judul, film.foto, watchlist.id_film FROM watchlist JOIN film ON watchlist.id_film = film.id WHERE watchlist.id_user = '$id_user'";
$query = mysqli_query($connect, $sql);

if (isset($_GET['delConfir'])){
  $modalConfir = "show";
}

if (isset($_SESSION['id_film'])){
  if (isset($_POST['yes'])){
    $id_user = $_SESSION['id_user'];
    $id_film = $_SESSION['id_film'];
  
    $sqlDel = "DELETE FROM watchlist WHERE id_user = '$id_user' AND id_film = '$id_film'";
    $queryDel = mysqli_query($connect, $sqlDel);
    if ($queryDel) {
      unset($_SESSION['id_film']);
      $modalConfir = "";
      header('location: watchlist-page.php'); 
    }
  }
}

if (isset($_GET['logConfir'])){
  $modalLogout = "show";
}

if (isset($_POST['yesLogout'])){
  session_unset();
  session_destroy();
  $modalLogout = "";
  header('location: login-page.php'); 
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
        <a href="../assets/php/logout.php?watchlist=1"><p>Sign Out</p></a>
      </div>
    </div>
  </nav>

  <!-- Konten Utama -->
  <main class="container mb-5" style="margin-top: 110px">
    <div class="d-flex flex-wrap gap-4">
<?php while($row = mysqli_fetch_assoc($query)) { ?>
      <div class="card-movie">
        <a href="detail-film.php?id=<?= $row['id']; ?>"><img src="../<?= $row['foto']; ?>" alt="" class="img-wrapper mb-3"></a> <!-- Link menuju film -->
        <div class="d-flex w-100 gap-2 justify-content-between">
          <p class="mb-2 w-75"><?= $row['judul']; ?></p>
          <a href="../assets/php/hapus-watchlist.php?id=<?= $row['id_film']; ?>" class="w-25">  <!-- Link agar menghapus film dari daftar -->
            <img src="../assets/images/trash-bin.png" alt="hapus" width="40px">
          </a>
        </div>
      </div>
<?php } ?>
    </div>
  </main>


    <!--MODAL KONFIRMASI Hapus film dari watchlist-->
    <div class="modal <?= $modalConfir ?>"> <!-- Tambahkan class "Show" untuk menampilkan modal -->
    <div class="modal-content card bg-dark text-center d-flex flex-column align-items-center justify-content-center">
      <p class="mb-5">Hapus film dari watchlist?</p>
      <div class="d-flex gap-5">
        <form action="watchlist-page.php" method="POST">
          <input type="submit" name="yes" value="Ya" class="btn btn-primary px-5 py-2">
          <input type="submit" name="close" value="Tidak" class="btn btn-light px-5 py-2">
        </form>
      </div>
    </div>
  </div> 


  <!--MODAL KONFIRMASI LOGOUT-->
  <div class="modal <?= $modalLogout ?>"> <!-- Tambahkan class "Show" untuk menampilkan modal -->
    <div class="modal-content card bg-dark text-center d-flex flex-column align-items-center justify-content-center">
      <p class="mb-5">Ingin keluar sekarang?</p>
      <div class="d-flex gap-5">
      <form action="watchlist-page.php" method="POST">
          <input type="submit" name="yesLogout" value="Ya" class="btn btn-primary px-5 py-2">
          <input type="submit" name="close" value="Tidak" class="btn btn-light px-5 py-2">
        </form>
      </div>
    </div>
  </div> 

</body>
</html>