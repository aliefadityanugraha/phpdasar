<?php

require 'function.php';

if(isset($_POST["register"])){

    if(registerasi($_POST)>0){
        echo "
        <script>
            alert('User  baru berhasil ditambahkan');
        </script>";
        header("Location:login.php");
    
    
} else {
    echo "
        <script>
            alert('User  baru gagal ditambahkan');
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
     <!-- favicon -->
     <link rel="shortcut icon" href="img/favicon/logo.png">
    <title>Daftar | Web Application</title>
</head>
<body>
<form action="" method="post">
    <h1>Daftar Web Application</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, harum!</p>
    <br></br>
      <label for="username" id="username-label">
        Username
        <input type="text" id="username" placeholder="Enter your Username" autocomplete="off" name="username" required />
      </label>

    <label for="password" id="password-label">
        Password
        <input type="password" id="password" placeholder="Enter your Password" autocomplete="off" name="password" required />
    </label>

    <label for="password2" id="password2-label">
        Confirm password
        <input type="password" id="password2" placeholder="Confirm your password" autocomplete="off" name="password2" required />
    </label>

      <button id="submit" type="submit" name="register">DAFTAR</button>
      <h2><a href="login.php">Kembali kehalaman Login</a></h2>
      <br></br>
      <br></br>
      <br></br>




<style>
  @import url('https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap');

  * {
    box-sizing: border-box;
  }

  body::before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(344deg, rgba(225, 225, 221, 0.6) 0%, rgba(0, 138, 166, 0.6) 100%), url(img/portfolio4.jpg);
    background-size: cover;
    z-index: -1;
  }

  body {
    font-family: Lato, sans-serif;
  }

  h1 {
    text-align: center;
    color: white;
    font-size:30px;
    padding-top:20px;
  }
  p {
    text-align: center;
    color: white;
    font-size:12px;
    padding-bottom:0px;

  }
  form {
    max-width: 400px;
    background:rgba(0, 138, 166, 0.6);
    margin: 0 auto;
    padding: 0px 40px;
    color: white;
    border-radius: 5px;
  }

  label {
    display: block;
    margin-bottom: 25px;
    align:center;
  }

  input[type='text'],
  input[type='password'],
  input[type='number'],
  select
  {
    display: block;
    margin-top: 10px;
    height: 40px;
    width: 100%;
    border-radius: 25px;
    border: 0;
    padding: 10px;
    font-family: inherit;
  }

  button {
    width: 100%;
    height: 35px;
    background-color:#00bfff;
    color:white;
    border: 0;
    border-radius: 25px;
  }
  h2 {
    text-align: center;
    color: white;
    font-size:12px;
    text-decoration:none;

  }

</style>
    
</body>
</html>