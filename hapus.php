<?php
session_start();

$nama = $_GET["nama"];

if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}

require 'function.php';

$id = $_GET['id'];

if(hapus($id)>0){
    echo "
        <script>
            alert('Data berhasil dihapus');
        </script>";
        header("Location:admin.php?nama=$nama");
}
    else {
        echo "
        <script>
            alert('Data gagal dihapus');
        </script>";
        header("Location:admin.php?nama=$nama");
    }





?>