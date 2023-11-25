<?php
include('database.php');
session_start();

if (isset($_POST['submKomen'])){
    $id_user = $_SESSION['id_user'];
    $id_film = $_GET['id_film'];
    $komen = $_POST['inpKomen'];

    $sql = "INSERT INTO komentar (id_user, id_film, komentar) VALUES ('$id_user','$id_film','$komen')";
    $query = mysqli_query($connect, $sql);
    header("location: ../../pages/detail-film.php?id=$id_film");
}
?>