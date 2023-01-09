<?php
    session_start();

    if ($_SESSION['user_type'] != 'resepsionis'){
        header('location:404.php');
    }
?>

Akun resepsionis