<?php
    session_start();

    if ($_SESSION['user_type'] != 'administrator'){
        header('location:404.php');
    }
?>

akun adminstrator