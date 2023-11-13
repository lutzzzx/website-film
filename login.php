<?php
include('database.php');
session_start();

if (isset($_POST['login'])){

    $email    = $_POST['inpEmail'];
    $password = $_POST['inpPassword'];
    $hash     = md5($password);
    
    $sql   = "SELECT * FROM user WHERE email = '$email'";
    $query = mysqli_query($connect, $sql);
    $check = mysqli_fetch_assoc($query);

    if ($check < 1){
        ?> <script>alert('Email tidak terdaftar!');</script> <?php
    } else {
        if ($check['email'] === $email && $check['password'] === $hash){
            $_SESSION['id_user'] = $check['id'];
            header('location: dashboard.html');
        } else { 
            ?> <script>alert('Email atau Password salah!');</script> <?php
        }
    }
}
?>