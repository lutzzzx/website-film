<?php
include('../assets/php/database.php');
$id_film = $_GET['id'];
$sql = "SELECT * FROM film WHERE id = '$id_film'";
$query = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($query);

if (isset($_POST['submEdit'])){ 
  $id_film = $_POST['id_film'];
  $judul = $_POST['editJudul'];
  $sinopsis = $_POST['editSinopsis'];

  $sqlfoto = "SELECT * FROM film WHERE id = '$id_film'";
  $queryfoto = mysqli_query($connect, $sqlfoto);
  $res = mysqli_fetch_assoc($queryfoto);

  $foto = $res['foto'];
  if (!empty($_FILES['editFoto']['name'])){
    $updatePhoto    = $_FILES['editFoto']['name'];
    $foto   = 'assets/images/'.$updatePhoto;
    $folder = '../assets/images/'.$updatePhoto;
    move_uploaded_file($_FILES['editFoto']['tmp_name'], $folder);
  }

  $sqlupd = "UPDATE film SET foto='$foto', judul='$judul', deskripsi='$sinopsis' WHERE id = '$id_film'";
  $queryupd = mysqli_query($connect, $sqlupd);
  header("location: edit-film.php?id=$id_film&editSucc=1");
}

$modalEsucc = "";
if (isset($_GET['editSucc'])){
  $modalEsucc = "show";
}
if (isset($_POST['closeSuccess'])){
  $modalEsucc = "";
  header("location: daftar-film.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Film</title>
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
        <a href="daftar-film.php" class="bg-gray p-3 w-100 d-flex justify-content-between decoration-none">
          <p>Film</p>
          <img src="../assets/images/right-arrow.png" alt="" width="18px">
        </a>
        <a href="tambah-film.php" class="bg-primary p-3 w-100 d-flex justify-content-between decoration-none">
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

        
    <!-- Bagian Utama -->
    <main class="w-100 mb-5 bg-dark" style="margin-left: 280px">
      <form action="edit-film.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_film" value="<?php echo $row['id']; ?>">
        <h1 class="mb-4">Edit Film</h1>
        <div class="d-flex gap-5 w-100">
          <div class="w-25">
            <p class="mb-2">Poster</p> <br>
            <label for="photo-upload" class="btn btn-primary px-5">Pilih file</label> <br><br><br>
            <input type="file" name="editFoto" id="photo-upload" accept="image/*" onchange="previewImage()" style="display:none;"/>
            <img id="image-preview" src="../<?= $row['foto'] ?>" alt="Preview" width="93%">
          </div>
          <div class="w-75">
            <label for="judul">Judul</label><br><br>
            <input type="text" name="editJudul" value="<?php echo $row['judul']; ?>" id="judul" class="input-form bg-dark w-100 mb-3" required><br><br>
            <label for="sinopsis">Sinopsis</label><br><br>
            <textarea name="editSinopsis" id="sinopsis" class="input-form bg-dark w-100 mb-4" style="height: 40vh" required><?php echo $row['deskripsi']; ?></textarea>
            <div class="d-flex justify-content-end">
              <input type="submit" name="submEdit" value="Simpan" class="btn btn-primary px-5">
            </div>
          </div>
        </div>
      </form>
    </main>
  </div>

  <!-- edit film Sukses -->
  <div class="modal <?= $modalEsucc ?>"> <!-- Tambahkan class "Show" untuk menampilkan modal -->
    <div class="modal-content card bg-dark text-center d-flex flex-column align-items-center justify-content-center">
      <p class="mb-5">Film telah diedit!</p>
      <form action="edit-film.php" method="POST">
      <input type="submit" name="closeSuccess" value="OK" class="btn btn-primary px-6 py-2">
      </form>
      </div>
  </div>

  <script src="../assets/js/preview-image.js"></script>

</body>
</html>