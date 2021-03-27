<?php
session_start();



if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
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
	<title>Account | Web Application</title>
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
<img class="materialboxed" width="230" src="img/person/profile1.jpg" class="responsive-img">
<h2><i class="material-icons">person</i>Welcome <?=$_GET["nama"]; ?></h2>
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
<div class="card-panel">
    <h2>Manage your Account</h2>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum eius non culpa officia vero vel error adipisci hic magni aliquid architecto quas cum earum, voluptas doloremque nemo autem eligendi harum!</p>

</div>
<div class="card-panel">
    <h2>Manage your Account</h2>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum eius non culpa officia vero vel error adipisci hic magni aliquid architecto quas cum earum, voluptas doloremque nemo autem eligendi harum!</p>

</div>
<div class="card-panel">
    <h2>Manage your Account</h2>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum eius non culpa officia vero vel error adipisci hic magni aliquid architecto quas cum earum, voluptas doloremque nemo autem eligendi harum!</p>

</div>


</div>
</div>
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
  .card-panel img {
        border-radius: 120px;
        border-color: blue;
        border:10px;
    }
  @media only screen and (max-width: 600px){
      .card-panel img {
        display: block;
        height: auto;
        max-width: 50%;
        border-radius: 120px;
        border-color: blue;
        border:10px;
  }

    }
    
</style>


<script src="js/script.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
    const materialbox = document.querySelectorAll('.materialboxed');
      M.Materialbox.init(materialbox);
</script>
</body>
</html>