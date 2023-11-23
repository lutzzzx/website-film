<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<div class="login-bg vh-100 position-relative">
    <div class="overlay position-absolute h-100 w-100">
     <form action="../assets/php/login.php" method="POST" class="position-relative">
        <div class="container vh-100 d-flex align-items-center">
          <div class="card bg-dark d-flex flex-column justify-content-between" style="width: 400px; height: 530px">
            <div class="card-body">
              <div class="mb-3 text-center">
                <img src="../assets/images/clapperboard.png" alt="" width="80px">
              </div>
              <div class="mb-3">
                <label for="email">E-mail</label>
                <input type="email" name="inpEmail" id="email" class="input-form bg-dark">
                <span id="email-validasi" class="validasi"></span> <br>
              </div>
              <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" name="inpPassword" id="password" class="input-form bg-dark">
                <span id="password-validasi" class="validasi"></span> <br>
              </div>
            </div>
            <div class="card-footer mt-auto text-center">
              <input id="submit" type="submit" value="Sign Up" name="Sign-Up" class="btn btn-primary px-5 mb-3" disabled>
              <p>Belum memiliki akun? <span><a href="register-page.php">Buat Akun.</a></span> </p>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- SignIn Sukses -->
  <div class="modal"> <!-- Tambahkan class "Show" untuk menampilkan modal -->
    <div class="modal-content card bg-dark text-center d-flex flex-column align-items-center justify-content-center">
      <p class="mb-5">Berhasil masuk ke akun!</p>
      <input type="submit" value="OK" class="btn btn-primary px-6 py-2">
    </div>
  </div>
  
  <!-- SignIn Gagal -->
  <div class="modal"> <!-- Tambahkan class "Show" untuk menampilkan modal -->
    <div class="modal-content card bg-dark text-center d-flex flex-column align-items-center justify-content-center">
      <img src="../assets/images/warning.png" alt="" width="70px">
      <h1 class="color-primary mb-2">Sign In Gagal</h1>
      <p class="mb-3">Periksa Kembali email/password anda!</p>
      <input type="submit" value="OK" class="btn btn-primary px-6 py-2">
    </div>
  </div>

  <script src="../assets/js/validation-auth.js"></script>
</body>
</html>