<?php
session_start();


if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}



require 'function.php';

$conn = mysqli_connect("localhost","root","","belajarphp");

if(isset($_POST["submit"])){
    
    if(tambahdata($_POST)>0){
        echo "
        <script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'admin.php';
        </script>";
    }
    else {
        echo "
        <script>
            alert('Data gagal ditambahkan');
            document.location.href = 'admin.php';
        </script>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     <!-- favicon -->
     <link rel="shortcut icon" href="img/favicon/logo.png">
    <title>Edit | Web Application</title>
</head>
<body>
<div class="navbar-fixed">
    <nav class="teal lighten-2">
	<div class="container">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo"><i class="material-icons">layers</i>Application Admin</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="sass.html">Sass</a></li>
          <li><a href="badges.html">Components</a></li>
        </ul>
      </div>
    </nav>
	</div>
  </div>
<div class="row">
<div class="col m3 s12">
<div class="card-panel">
<h2><i class="material-icons">person</i>Welcome to page Insert</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae praesentium neque quibusdam ut rem tempora culpa, adipisci omnis? Non fuga hic explicabo labore praesentium distinctio quo quos, earum, neque cumque ratione enim, eum deserunt. Dolor neque cum inventore nesciunt? Sint nesciunt eligendi iusto quaerat atque accusamus itaque, aliquam labore suscipit sapiente. Accusantium magnam soluta minima aliquam autem eligendi. Accusantium assumenda enim dolorum inventore harum veniam deleniti delectus reiciendis fuga cumque necessitatibus nam perferendis ea eaque eos praesentium totam, doloremque, aspernatur repellendus! Tempora, nesciunt! Porro dolore laudantium aliquid, fuga aliquam similique. Temporibus et eius perspiciatis iste reprehenderit illum deserunt fuga hic.</p>
<table class="centered Highlight">
        <tbody>
          <tr>
            <td>Alvin</td>
          </tr>
          <tr>
            <td>Alan</td>
          </tr>
          <tr>
            <td>Jonathan</td>
          </tr>
        </tbody>
      </table>
</div>


</div>
<div class="col m9 s12">

<h1>Tambah Data Siswa</h1>
<form action="" method="post">
<ul>
    <li>
    <lable for="nama">Nama</lable>
    <input type="text" name="nama" id="nama" required>
    </li>
    <li>
    <lable for="email">Email</lable>
    <input type="text" name="email" id="email" required>
    </li>
    <li>
    <lable for="nourut">Nourut</lable>
    <input type="text" name="nourut" id="nourut" required>
    </li>
    <li><button class="waves-effect waves-light btn" type="submit" name="submit">Tambah</button></li>
</ul>
</form>
<a href="index.php">Mbalik</a>

</div>
<style>
	h1{
		font-size:30px;
	}
	h2{
		font-size:20px;
	}
	.form {
		display:inline-block;
	}

</style>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>