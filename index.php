<?php
include('assets/php/database.php');

$sql = "SELECT * FROM film";
$query = mysqli_query($connect, $sql);

$sqltop = "SELECT * FROM film ORDER BY jml_like DESC";
$querytop = mysqli_query($connect, $sqltop);

$id_user = $_SESSION['id_user'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <style>


  </style>
</head>
<body>

<!-- NAVBAR -->
  <nav class="fixed-top bg-primary p-3">
    <div class="container">
      <div class="navbar">
        <div></div>
        <div class="d-flex gap-5">
          <p>Watchlist</p>
          <p>Sign Out</p>
        </div>
      </div>
    </div>
  </nav>


  <!-- SLIDER -->
  <div class="slider-container">
  <?php while($top = mysqli_fetch_assoc($querytop)) { ?>
    <div class="slider">
      <img class="slider-image" src="<?= $top['foto'] ?>" alt="Foto 1">
      <div class="slider-content">
        <div class="container">
          <h1 class="mb-3">TOP 5 MOVIES THIS WEEK</h1>
          <hr class="mb-3">
          <h1 style="font-size: 48px"><?= $top['judul'] ?></h1>
        </div>
      </div>
    </div>
    <?php } ?>

    <img src="assets/images/previous.png" id="prev-button" onclick="prevSlide()"/>
    <img src="assets/images/next.png" id="next-button" onclick="nextSlide()"/>
  </div>

  <main class="container mt-5 mb-5">
    <h1 class="mb-4">ALL MOVIES</h1>
    <div class="d-flex flex-wrap gap-4">

        <?php while($row = mysqli_fetch_assoc($query)){ ?>
            <div class="card-movie">
                <a href="" class="link-movie"> <!--Tambahkan link ke detail film-->
                  <img src="<?= $row['foto'] ?>" alt="" class="img-wrapper mb-2">
                  <p class="text-center mb-2"><?= $row['judul'] ?></p>
                </a>
                <div class="d-flex gap-3 justify-content-center">
                  <div class="bg-primary btn px-3 py-2 d-flex gap-2">
                    <img src="assets/images/like.png" alt="" width="16px">
                    <p style="font-size: 12px"><?= $row['jml_like'] ?></p>
                </div>
                <div class="bg-primary btn px-3 py-2 d-flex gap-2">
                    <img src="assets/images/dislike.png" alt="" width="16px">
                    <p style="font-size: 12px"><?= $row['jml_dislike'] ?></p>
                </div>
              </div>
            </div>
        <?php } ?>

    </div>
  </main>

  <script src="assets/js/slider.js"></script>
  
</body>
</html>