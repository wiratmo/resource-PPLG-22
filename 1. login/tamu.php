<?php
    session_start();

    if ($_SESSION['user_type'] != 'tamu'){
        header('location:404.php');
    }
?>

akun tamu