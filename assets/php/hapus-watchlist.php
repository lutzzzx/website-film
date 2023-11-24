<?php
include('database.php');
session_start();

if (!isset($_SESSION['id_user'])){
    header("location: ../../pages/login-page.php");
}

if (isset($_GET['id'])){
    $id_user = $_SESSION['id_user'];
    $id_film = $_GET['id'];

    $sql = "DELETE FROM watchlist WHERE id_user = '$id_user' AND id_film = '$id_film'";
    $query = mysqli_query($connect, $sql);
    header('location: ../../pages/watchlist-page.php');
}
?>