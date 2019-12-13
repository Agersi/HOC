<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/core.css" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d5850d456f.js" crossorigin="anonymous"></script>
    <title>HOUSE OF CODE TASK</title>
  </head>
  <body>
    <div class="wrapper"><!--wrapper ends in footer-->
      <div class="container"><!--container ends in footer-->
        <div class="row part_header">
          <div class="col-2">
          </div>
          <div class="col-4 logoa">
            <a href="index.php?page=home"><img class="logo1" src="images/logoHOC1.png"><img class="logo" src="images/logoHOC2.png"></a>
          </div>
          <div class="col-4">
            <ul class="header_menu roboto">
              <li>SDK'S</li>
              <li>Pricing</li>
              <li>Contact</li>
              <?php
                if(isset($_SESSION['username'])){
                  echo '<li><a href="code/sign_out.php" class="signin_button">Sign Out</a></li>';
                }
                else{
                  echo '<li><a href="index.php?page=sign_in" class="signin_button">Sign In</a></li>';
                }

                if(isset($_SESSION['auth'])){
                  $auth = $_SESSION['auth'];
                  if($auth == 1){
                    echo '<li><a href="index.php?page=admin" class="signin_button">Admin</a></li>';
                  }
                }
              ?>
            </ul>
          </div>
          <div class="col-2">
          </div>
        </div><!--row end-->
