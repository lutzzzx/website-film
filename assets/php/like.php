<?php
include('database.php');
session_start();

$id_film = $_GET['id'];
$id_user = $_SESSION['id_user'];

$sqlcek = "SELECT * FROM suka WHERE id_user = '$id_user' AND id_film = '$id_film'";
$querycek = mysqli_query($connect, $sqlcek);

if (mysqli_num_rows($querycek) == 0){
    $sqlsuka = "INSERT INTO suka (id_user, id_film) VALUES ('$id_user', '$id_film')";
    $querysuka = mysqli_query($connect, $sqlsuka);
    header("location: ../../pages/detail-film.php?id=$id_film");
} else {
    $sqlunsuka = "DELETE FROM suka WHERE id_user = '$id_user' AND id_film = '$id_film'";
    $queryunsuka = mysqli_query($connect, $sqlunsuka);
    header("location: ../../pages/detail-film.php?id=$id_film");
}
?>