<?php
session_start();


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
    <link rel="stylesheet" href="css/style.css">

    <title>Home | Web Application</title>
</head>
<body>
    <!-- My Navbar -->
    <div class="nav-fixed">
    <nav class="teal lighten-2">
      <div class="container ">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo" font-size="10px"><i class="material-icons">layers</i>Web Application</a>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="sass.html">Sass</a></li>
          <li><a href="badges.html">Components</a></li>
          <li>
          <form action="login.php" method="get">
          <button name="submit" class="waves-effect waves-light btn-small blue" onclick="logindisek" >Login </button>
          </form>
          </li>
        </ul>
      </div>
    </div>
    </nav>
  </div>
  </div>
  <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="img/portfolio1.jpg">
      </div>
      <a href="#user"><img class="circle" src="img/icon/logoweb.png"></a>
      <a href="#name"><span class="white-text name">Alief Aditya Nugraha</span></a>
      <a href="#email"><span class="white-text email">aliefalief2005@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>

<!--My Body -->
  <div class="container">
    <div class="row">
      <div class="col m4 s12">
        <div class="card-panel">
          <div class="section">
            <img class="materialboxed center" width="230" src="img/portfolio2.jpg">
        </div>
        <h1>Alief Aditya Nugraha</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, omnis. Magnam nam ex consequatur, omnis soluta molestiae voluptatum rerum eius itaque praesentium, dolorum reprehenderit, fugiat deleniti quas? Omnis, voluptatem repudiandae.</p>
        <ul class="collapsible">
          <li>
            <div class="collapsible-header"><i class="material-icons">place</i>Address</div>
            <div class="collapsible-body"><span>Jl.Letjen Sutoyo no42b kec.Pesantren Kel.Burengan Kota Kediri Jawa Timur <a href="https://www.youtube.com/">For Details</a></span></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">person</i>Contact</div>
            <div class="collapsible-body"><span><a href="https://api.whatsapp.com/send?phone=6289510067618">+6289 510 067 618</a></span></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">language</i>Social Media</div>
            <div class="collapsible-body"><span>
              <ul>
                <li type="circle"><a href="https://www.facebook.com/">Facebook</a></li>
                <br></br>
                <li type="circle"><a href="https://www.instagram.com/adityanugraha_05">Instagram</a></li>
                <br></br>
                <li type="circle"><a href="https://www.twitter.com/">Twitter</a></li>
                <br></br>
                <li type="circle"> <a href="https://www.youtube.com/">Youtube</a></li>
              </ul>             
            </span>
          </div>
          </li>
        </ul>
              
      </div>
       </div>
      <div class="col m8 s12">
        <div class="card-panel fixed">
        <h1><i class="material-icons">layers</i>With Framework materializecss</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, omnis. Magnam nam ex consequatur, omnis soluta molestiae voluptatum rerum eius itaque praesentium, dolorum reprehenderit, fugiat deleniti quas? Omnis, voluptatem repudiandae.</p>
        <h1><i class="material-icons">layers</i>About Me</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, omnis. Magnam nam ex consequatur, omnis soluta molestiae voluptatum rerum eius itaque praesentium, dolorum reprehenderit, fugiat deleniti quas? Omnis, voluptatem repudiandae.</p>
        <h1><i class="material-icons">layers</i>About Me</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, omnis. Magnam nam ex consequatur, omnis soluta molestiae voluptatum rerum eius itaque praesentium, dolorum reprehenderit, fugiat deleniti quas? Omnis, voluptatem repudiandae.</p>

      </div>
    </div>
    </div>
  </div>

    
  
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
      const sidenav = document.querySelectorAll('.sidenav');
      M.Sidenav.init(sidenav);
      const collapsible = document.querySelectorAll('.collapsible');
      M.Collapsible.init(collapsible);

      function logindisek(){
			header("Location:admin.php")
		}
  </script>
    
</body>
</html>