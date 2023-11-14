<?php
include('database.php');

if (isset($_POST['register'])){
    $username = $_POST["inpUsername"];
    $email    = $_POST["inpEmail"];
    $password = $_POST["inpPassword"];
    $hash     = md5($password);
    
    $sql    = "SELECT * FROM user WHERE email = '$email'";
    $query  = mysqli_query($connect, $sql);
    $check  = mysqli_fetch_assoc($query1);    

    if ($check > 0){
        ?> <script>alert('Email telah terdaftar!');</script> <?php
    } else {
        $sql1   = "INSERT INTO user (username, email, password) VALUES ('$username', '$email','$hash')";
        $query1 = mysqli_query($connect, $sql1);
        header('location: login.html');
    }
}
?>