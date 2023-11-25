<?php
include('database.php');

$id_film = $_GET['id'];
header("location: ../../pages/detail-film.php?id=$id_film&modalConfirw=1");
?>