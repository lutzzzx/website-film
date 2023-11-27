<?php
include('database.php');
session_start();

if (isset($_GET['id'])) {
    $id_film = $_GET['id'];
    $_SESSION['id_film'] = $id_film;
    header("location: ../../admin/daftar-film.php?delConfir=1");
}
?>