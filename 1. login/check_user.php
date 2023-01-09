<?php 
// manambahkan session untuk menyimpan data ke dalam sesion.
session_start();

// koneksi dengan database
$host		= '127.0.0.1';
$username 	= 'RPLSMK2';
$password	= 'kitabisa';
$database	= 'smk_hotel';

$koneksi 	= mysqli_connect($host, $username, $password, $database);


// mengambil data dari form

$username   = $_POST['username'];
$password   = $_POST['password'];


// mencocokan data form ke dalam database

$query_get_data     = "select * from user where username = '$username' and password = '$password'";
$exec               = mysqli_query($koneksi, $query_get_data);
$get_data           = mysqli_fetch_array($exec);
// melempar data ke halaman yang diinginkan
$user_type          = $get_data['user_type'];

// di line paling atas di tambahkan
// session_start();
$_SESSION['user_type'] = $user_type;

switch ($user_type){
    case 'tamu':
        header('location:tamu.php');
        break;
    case 'resepsionis':
        header('location:resepsionis.php');
        break;
    case 'administrator':
        header('location:administrator.php');
        break;
    default:
        header('location:index.php');
    }
?>