<?php 
include('../assets/php/database.php');
session_start();

$role = "admin";
$id_user = $_SESSION['id_user'];
$sqladmin = "SELECT * FROM user WHERE id = '$id_user'";
$queryadmin = mysqli_query($connect, $sqladmin);
$row = mysqli_fetch_assoc($admin);

if ($row['role'] === $role){
  header("location: access-denied.php");
}

if (!isset($_SESSION['id_user'])){
  header("location: ../pages/login-page.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
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
        <a href="index.php" class="bg-primary p-3 w-100 d-flex justify-content-between decoration-none">
          <p>Dashboard</p>
          <img src="../assets/images/right-arrow.png" alt="" width="18px">
        </a>
        <hr style="border: 1px solid gray">
        <a href="daftar-film.php" class="bg-gray p-3 w-100 d-flex justify-content-between decoration-none">
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
        <div  class="bg-gray p-3 w-75 d-flex justify-content-between">
          <p>Logout</p>
          <img src="../assets/images/right-arrow.png" alt="" width="18px">
        </div>
      </a>
    </aside>


    <!--Bagian Utama -->
    <main class="w-100 overflow-auto" style="margin-left: 280px">
      <h1>Selamat Datang, Admin!</h1>
    </main>
  </div>
  
</body>
</html>