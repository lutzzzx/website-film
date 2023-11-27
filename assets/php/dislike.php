<?php
include('database.php');
session_start();

$id_film = $_GET['id'];
$id_user = $_SESSION['id_user'];

$sqlcek = "SELECT * FROM unsuka WHERE id_user = '$id_user' AND id_film = '$id_film'";
$querycek = mysqli_query($connect, $sqlcek);

if (mysqli_num_rows($querycek) == 0){
    $sqlTidaksuka = "INSERT INTO unsuka (id_user, id_film) VALUES ('$id_user', '$id_film')";
    $queryTidaksuka = mysqli_query($connect, $sqlTidaksuka);
    header("location: ../../pages/detail-film.php?id=$id_film");
} else {
    $sqlTidaksuka = "DELETE FROM unsuka WHERE id_user = '$id_user' AND id_film = '$id_film'";
    $queryTidaksuka = mysqli_query($connect, $sqlTidaksuka);
    header("location: ../../pages/detail-film.php?id=$id_film");
}
?>