<?php
session_name("CSCENTREPRENEUR");
session_start();
if(isset($_SESSION['Username'])){
  header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <title>Entrepreneur - Register</title>

    <!-- Bootstrap core CSS -->
    <link href="../resources/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../resources/bootstrap/css/signin.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../resources/bootstrap/css/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

        <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
             <ul class="nav masthead-nav">
                <li><a href="../principal.php" style = "color: #333">Home</a></li>
                <li><a href="signin.php" style = "color: #333">Log In</a></li>
              </ul>
            </div>
          </div>

          <div class="inner cover" style="margin-top: 250px">
            <!--<h1 class="cover-heading">Cover your page.</h1>-->
           <div class="container" style="margin-left: -250px">

            <form class="form-signin" action="register.php" method="post" name="form_signup">
            
            <?php

            if(isset($GET['login']))
              if($GET['login'] = "error"){ ?>
                <div class="alert alert-danger"><p>Registration Fail</p></div>
      <?php }?>
      
              <h2 class="form-signin-heading">Register </h2>
              <input type="email" class="form-control" placeholder="E-mail" name='Email'required>
              <input type="text" class="form-control" placeholder="Name" name='Name'required autofocus>
              <input type="text" class="form-control" placeholder="Lastname" name='LastName'required autofocus>
              <input type="text" class="form-control" placeholder="Username" name='Username'required autofocus>
              <input type="password" class="form-control" placeholder="Password" name='Password' required>
              <button style="background-color: #236f6d; border-color: #236f6d" class="btn btn-lg btn-primary btn-block" style="background-color: #22a3d0 " type="submit" value= "Register" name="register">Register</button>
            </form>
          </div> <!-- /container -->
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p style= "color: #333">© Copyright CSC Entrepreneur 2015. Powered by MG<style= "color: #333"></p>
            </div>
          </div>

        </div>

      </div>

    </div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <script src="Bootstrap/js/docs.min.js"></script>
  </body>
</html>