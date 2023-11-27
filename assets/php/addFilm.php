<?php
include("database.php");

if (isset($_POST['submFilm'])){
    $judul = $_POST['inpJudul'];
    $sinopsis = $_POST['inpSinopsis'];
    
    $photo = $_FILES['inpFoto']['name'];
    $upload = 'assets/images/'.$photo;
    $folder = '../images/'.$photo;
    move_uploaded_file($_FILES['inpFoto']['tmp_name'], $folder);

    $sql = "INSERT INTO film (foto, judul, deskripsi) VALUES ('$upload','$judul','$sinopsis')";
    $query = mysqli_query($connect, $sql);

    header("location: ../../admin/tambah-film.php?addSucc=1");
}

?>