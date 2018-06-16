<?php
$severname = "";
$username = "";
$password = "";
/*
 When we have our database ready
 $link = mysqli_connect($severname, $username, $password, $username);

 if(!$link){
   die("Connection failed: ".mysqli_connect_error());
 }
 */
 if($_POST){
   if(isset($_POST['btnCreate'])){
      $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
      echo "Thx for joing us ".$_POST['name']." :) and your encrypted password is ".$hash;

    }
    else{
      echo "Welcome back ".$_POST['username'];
    }
 }

?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Flat HTML5/CSS3 Login Form</title>



      <link rel="stylesheet" href="style.css">


</head>

<body>

  <div class="login-page">
  <div class="form">
    <form class="register-form" method="post">
      <input type="text" placeholder="name" name="name"/>
      <input type="password" placeholder="password" name="password"/>
      <input type="text" placeholder="email address" name="email"/>
      <button name="btnCreate">create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" method="post">
      <input type="text" placeholder="username" name="username"/>
      <input type="password" placeholder="password" name="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



    <script  src="index.js"></script>




</body>

</html>
