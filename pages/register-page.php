<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="../assets/css/main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
  <form action="">
    <div class="container vh-100 d-flex align-items-center">
      <div class="card bg-dark d-flex flex-column justify-content-between" style="width: 400px; height: 530px">
        <div class="card-body">
          <label for="nama">Nama</label><br>
          <input type="text" name="" id="nama" class="input-form bg-dark mb-2">
          <label for="email">E-mail</label>
          <input type="email" name="" id="email" class="input-form bg-dark mb-2">
          <label for="password">Password</label>
          <input type="password" name="" id="password" class="input-form bg-dark mb-2">
        </div>
        <div class="card-footer mt-auto text-center">
          <input type="submit" value="Sign Up" class="btn btn-primary px-5 mb-3">
          <p>Sudah memiliki akun? <span><a href="login-page.php">Masuk.</a></span> </p>
        </div>
      </div>
    </div>
  </form>
</body>
</html>