<?php
session_start();



// if(!isset($_LOGIN["login"])){
// 	header("Location:admin.php");
// 	exit;
// }


require 'function.php';




if(isset($_POST["login"])){

  $username = $_POST["username"];
  $password = $_POST["password"];

  $hasil = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

  if(mysqli_num_rows($hasil) === 1){



    $row = mysqli_fetch_assoc($hasil);
    if(password_verify($password , $row["password"])){

      $_SESSION["login"] = true;

        header("Location:admin.php?nama= $username");
      exit;
    }


  }
  $error = true;
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
    <link rel="stylesheet" href="css/style.css">
    <title>Login | Web Appliction</title>
</head>
<body>
<body>
    

    <form action="" method="post">
    <h1>Login Web Application</h1>
    <p>Please fill the form for start the application, thank you.</p>
    <br></br>
      <label for="username">
        Username
        <input type="text" id="username" placeholder="Enter your Username" autocomplete="off" name="username" required />
      </label>


   <?php if(isset($error))   :?>
  <p style="color:red;">username / password salah</p>
   <?php endif;  ?>

      <label for="password">
        Password
        <input type="password" id="password" placeholder="Enter your Password" autocomplete="off" name="password" required />
      </label>
      <button id="submit" type="submit" name="login">LOGIN</button>
      <h2><a href="registerasi.php">Daftar ke Web Application</a></h2>
      <br></br>
      <br></br>
      <br></br>
     
    </form>


    <!-- CSS bne kenek -->
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
    padding-bottom:20px;

  }
  form {
    max-width: 400px;
    background:rgba(0, 138, 166, 0.6);
    margin: 0 auto;
    padding: 20px 40px;
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
    background-color:#00BFFF;
    border: 0;
    border-radius: 25px;
    color:white;
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