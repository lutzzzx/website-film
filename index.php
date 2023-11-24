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
    <div class="slider">
      <img class="slider-image" src="assets/images/background.jpg" alt="Foto 1">
      <div class="slider-content">
        <div class="container">
          <h1 class="mb-3">TOP 5 MOVIES THIS WEEK</h1>
          <hr class="mb-3">
          <h1 style="font-size: 48px">THE AVENGER</h1>
        </div>
      </div>
    </div>
    <div class="slider">
      <img class="slider-image" src="assets/images/clapperboard.png" alt="Foto 2">
      <div class="slider-content">
        <div class="container">
          <h1 class="mb-3">TOP 5 MOVIES THIS WEEK</h1>
          <hr class="mb-3">
          <h1 style="font-size: 48px">THE AVENGER 2</h1>
        </div>
      </div>
    </div>
    <div class="slider">
      <img class="slider-image" src="assets/images/warning.png" alt="Foto 3">
      <div class="slider-content">
        <div class="container">
          <h1 class="mb-3">TOP 5 MOVIES THIS WEEK</h1>
          <hr class="mb-3">
          <h1 style="font-size: 48px">THE AVENGER 3</h1>
        </div>
      </div>
    </div>
    <img src="assets/images/previous.png" id="prev-button" onclick="prevSlide()"/>
    <img src="assets/images/next.png" id="next-button" onclick="nextSlide()"/>
  </div>

  <main class="container mt-5 mb-5">
    <h1 class="mb-4">ALL MOVIES</h1>
    <div class="d-flex flex-wrap gap-4">
      <div class="card-movie">
        <a href="" class="link-movie"> <!--Tambahkan link ke detail film-->
          <img src="assets/images/background.jpg" alt="" class="img-wrapper mb-2">
          <p class="text-center mb-2">Judul Film sdfsdf sdf saf sdfsdf s</p>
        </a>
        <div class="d-flex gap-3 justify-content-center">
          <div class="bg-primary btn px-3 py-2 d-flex gap-2">
            <img src="assets/images/like.png" alt="" width="16px">
            <p style="font-size: 12px">123</p>
          </div>
          <div class="bg-primary btn px-3 py-2 d-flex gap-2">
            <img src="assets/images/dislike.png" alt="" width="16px">
            <p style="font-size: 12px">123</p>
          </div>
        </div>
      </div>
      <div class="card-movie">
        <a href="" class="link-movie"> <!--Tambahkan link ke detail film-->
          <img src="assets/images/background.jpg" alt="" class="img-wrapper mb-2">
          <p class="text-center mb-2">Judul Film sdfsdf sdf saf sdfsdf s</p>
        </a>
        <div class="d-flex gap-3 justify-content-center">
          <div class="bg-primary btn px-3 py-2 d-flex gap-2">
            <img src="assets/images/like.png" alt="" width="16px">
            <p style="font-size: 12px">123</p>
          </div>
          <div class="bg-primary btn px-3 py-2 d-flex gap-2">
            <img src="assets/images/dislike.png" alt="" width="16px">
            <p style="font-size: 12px">123</p>
          </div>
        </div>
      </div>
    </div>
  </main>

  

  <script src="assets/js/slider.js"></script>
  
</body>
</html>