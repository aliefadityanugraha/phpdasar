<?php
session_start();


if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}



	require 'function.php';

	//PAGINATION RUWET PuuuuuuuuuuuuuuuuuuuuuuuuuuooooooooooooooooooooOOL
	// $perhalaman = 4;
	// $totaldata = count(query("SELECT * FROM datasiswa"));
	// $totalhalaman = ceil($totaldata / $perhalaman) ;

	// // $halamanaktif = (isset($_GET["page"])) ? $_GET["page"] :1;

	// if(isset($_GET["page"])){
	// 	$halamanaktif = $_GET["page"];
	// }else {
	// 	$halamanaktif = 1;
	// }
	// //mulai darimana data nya
	// $datawal = ($perhalaman * $halamanaktif) - $perhalaman;
	//0 -3 
	//4- 7
//ORDER BY id DECS agar data baru yang masuk berada diurutan paling atas
	$data = query("SELECT * FROM datasiswa ORDER BY id DESC");

	


if(isset($_POST["cari"])){
	$data = cari($_POST["keyword"]);

}



?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	 <!-- favicon -->
	 <link rel="shortcut icon" href="img/favicon/logo.png">
	<title>Halaman Admin | Web Application</title>
</head>

<body>

<div class="navbar-fixed">
    <nav class="teal lighten-2">
	<div class="container">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo"><i class="material-icons">layers</i>Application Admin</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="logout.php">Logout</a></li>
		  <li><a href="index.php">Home</a></li>
        </ul>
      </div>
    </nav>
	</div>
  </div>
<div class="row">
<div class="col m3 s12">
<div class="card-panel">
<h2><i class="material-icons">person</i>Welcome <?= $_GET["nama"]; ?></h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae praesentium neque quibusdam ut rem tempora culpa, adipisci omnis? Non fuga hic explicabo labore praesentium distinctio quo quos, earum, neque cumque ratione enim, eum deserunt. Dolor neque cum inventore nesciunt? Sint nesciunt eligendi iusto quaerat atque accusamus itaque, aliquam labore suscipit sapiente. Accusantium magnam soluta minima aliquam autem eligendi. Accusantium assumenda enim dolorum inventore harum veniam deleniti delectus reiciendis fuga cumque necessitatibus nam perferendis ea eaque eos praesentium totam, doloremque, aspernatur repellendus! Tempora, nesciunt! Porro dolore laudantium aliquid, fuga aliquam similique. Temporibus et eius perspiciatis iste reprehenderit illum deserunt fuga hic.</p>

<table class="centered Highlight">
        <tbody>
          <tr>
            <td><a href="account.php?nama=<?= $_GET["nama"]; ?>">Manage My Account</a></td>
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

<h1>DATA SISWA</h1>

<!-- CARI -->
<a href="tambah.php" > + Tambah Data Siswa</a>
<br></br>
<!-- CARI COY -->
<form action="" method="post">

	<input class="input-field col s6"  type="text" name="keyword" size="40" autofocus placeholder="Cari Data" autocomplete="off" id="kunci">

	<button class="waves-effect waves-light btn" type="cari" name="cari" id="cari">CARI</button>

</form>

<!-- //NAV PAG
<?php 
//for($e = 1 ; $e <= $perhalaman ; $e++ ):?>
	<ul class="pagination">
    <li class="waves-effect"><a href="?page=<?php //$e ?> "><?php //$e; ?></a></li>
 	 </ul>
<?php //endfor; ?> -->

<!-- TABLE DATA -->
<div id="container">

<table border="1" cellpadding="10" cellspacing="0" class="highlight responsive-table lefted">
<br></br>
	<tr>
		<th>No</th>
		<th>Aksi</th>
		<th>id</th>
		<th>Nama</th>
		<th>Email</th>
	
	</tr>
	 <?php $i=1; ?>
	 <?php foreach ($data as $row) :?>

	
	<tr>
		<td><?= $i ?></td>
		<td>
		<a href="edit.php?id=<?= $row ['id']; ?>" >Edit <a/> |
	    <a href="hapus.php?id=<?= $row ['id']; ?>" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')">Hapus<a/>
		</td>
		<td><?= $row ["id"]; ?></td>
		<td><?= $row ["nama"]; ?></td>
		<td><?= $row ["email"]; ?></td>
	
	</tr>
	<?php $i++ ; ?>
	<?php endforeach ;?>
	
		
	<br></br>
	
	
</table>
</div>
</div>
</div>

<style>
	@import url('https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap');
	body {
		font-family: Lato, sans-serif;
	}
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