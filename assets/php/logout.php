<?php
if (isset($_GET['watchlist'])){
    header('location: ../../pages/watchlist-page.php?logConfir=1');
} else {
    session_start();
    session_unset();
    session_destroy();
    header('location: ../../pages/login-page.php');
}
?>