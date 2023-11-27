<?php
session_start();
if (isset($_GET['watchlist'])) {
    header('location: ../../pages/watchlist-page.php?logConfir=1');
} else if (isset($_GET['logIndex'])) {
    header('location: ../../index.php?logConfir=1');
} else if (isset($_GET['logDetail'])) {
    $id_film = $_GET['id'];
    $_SESSION['id_film'] = $id_film;
    header("location: ../../pages/detail-film.php?id=$id_film&logConfir=1");
} else {
    session_unset();
    session_destroy();
    header("location: ../../pages/login-page.php");
}
