<?php
include('database.php');

if (isset($_POST['Sign-Up'])){
    $nama     = $_POST["inpNama"];
    $email    = $_POST["inpEmail"];
    $password = $_POST["inpPassword"];
    $hash     = md5($password);
    
    $sql    = "SELECT * FROM user WHERE email = '$email'";
    $query  = mysqli_query($connect, $sql);
    $check  = mysqli_fetch_assoc($query);    

    if ($check > 0){
        ?>
        <script>
            alert('Email telah terdaftar!');
            window.location.href='../../pages/register-page.php';
        </script>
        <?php
    } else {
        $sql1   = "INSERT INTO user (nama, email, password) VALUES ('$nama', '$email','$hash')";
        $query1 = mysqli_query($connect, $sql1);
        
        ?>
        <script>
            alert('Registrasi berhasil!');
            window.location.href='../../pages/login-page.php';
        </script>
        <?php
    }
}
?>