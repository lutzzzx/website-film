<?php
include('../assets/php/database.php');
session_start();

$role = "admin";
$id_user = $_SESSION['id_user'];
$sqladmin = "SELECT * FROM user WHERE id = '$id_user'";
$queryadmin = mysqli_query($connect, $sqladmin);
$row = mysqli_fetch_assoc($queryadmin);

if ($row['role'] != $role){
  header("location: access-denied.php");
}

if (!isset($_SESSION['id_user'])){
  header("location: ../pages/login-page.php");
}

$sql = "SELECT * FROM film";
$query = mysqli_query($connect, $sql);
$modalConfir = "";

if (isset($_GET['delConfir'])) {
  $modalConfir = "show";
}

// DELETE PARENT TABLE (film)
if (isset($_SESSION['id_film'])) {
  if (isset($_POST['yesdel'])) {
    $id_film = $_SESSION['id_film'];

    $sqldelkomen = "DELETE FROM komentar WHERE id_film = '$id_film'";
    $querydelkomen = mysqli_query($connect, $sqldelkomen);

    $sqldellike = "DELETE FROM suka WHERE id_film = '$id_film'";
    $querydellike = mysqli_query($connect, $sqldellike);

    $sqldeldislike = "DELETE FROM unsuka WHERE id_film = '$id_film'";
    $querydeldislike = mysqli_query($connect, $sqldeldislike);
    
    $sqldelwatch = "DELETE FROM watchlist WHERE id_film = '$id_film'";
    $querydelwatch = mysqli_query($connect, $sqldelwatch);
    
    $sqldelfilm = "DELETE FROM film WHERE id = '$id_film'";
    $querydelfilm = mysqli_query($connect, $sqldelfilm);

    if ($querydelfilm) {
      unset($_SESSION['id_film']);
      header("location: daftar-film.php");
      $modalConfir = "";
    }
  }
}
?>

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
      <a href="../assets/php/logout.php" class="d-flex gap-2 decoration-none">
        <img src="../assets/images/leave.png" alt="" class="w-25">
        <div class="bg-gray p-3 w-75 d-flex justify-content-between">
          <p>Logout</p>
          <img src="../assets/images/right-arrow.png" alt="" width="18px">
        </div>
      </a>
    </aside>


    <!--Bagian Utama -->
    <main class="w-100 mb-5" style="margin-left: 280px;">
      <h1>Daftar Film</h1>
      <a href="tambah-film.php"><button class="btn btn-primary mt-3 mb-5">Tambah Film</button></a> <br>
      <table class="w-100">
        <tr>
          <th>Poster</th>
          <th>Judul</th>
          <th>Sinopsis</th>
          <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($query)) { ?>
          <tr>
            <td style="width: 15%"><img src="../<?= $row['foto']; ?>" alt="" width="125px"></td>
            <td style="width: 15%"><?= $row['judul']; ?></td>
            <td style="width: 55%">
              <p class="sinopsis"><?= $row['deskripsi']; ?></p>
            </td>
            <td style="width: 15%">
              <div class="d-flex fl$ex-column gap-3">
                <a href="edit-film.php?id=<?= $row['id']; ?>"><button class="btn btn-primary w-100">Edit</button></a>
                <a href="../assets/php/del-film.php?id=<?= $row['id']; ?>"><button class="btn btn-primary w-100">hapus</button></a>
              </div>
            </td>
          </tr>
        <?php } ?>
      </table>
    </main>
  </div>

  <!--MODAL KONFIRMASI Hapus film-->
  <div class="modal <?= $modalConfir ?>"> <!-- Tambahkan class "Show" untuk menampilkan modal -->
    <div class="modal-content card bg-dark text-center d-flex flex-column align-items-center justify-content-center">
      <p class="mb-5">Yakin menghapus film?</p>
      <div class="d-flex gap-5">
        <form action="daftar-film.php" method="POST">
          <input type="submit" name="yesdel" value="Ya" class="btn btn-primary px-5 py-2">
          <input type="submit" name="close" value="Tidak" class="btn btn-light px-5 py-2">
        </form>
      </div>
    </div>
  </div>

</body>

</html>