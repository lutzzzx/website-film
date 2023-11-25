<?php
include('database.php');
session_start();

if (!isset($_SESSION['id_user'])){
    header("location: ../../pages/login-page.php");
}

if (isset($_GET['id'])){
    $id_film = $_GET['id'];
    $_SESSION['id_film'] = $id_film;
    header("location: ../../pages/watchlist-page.php?delConfir=1");
}
?>