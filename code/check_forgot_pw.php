<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

  require_once '../includes/dbconnect.php';
  session_start();

  $errors = array();

if(empty($_POST['email'])){
  $errors[] = "Please provide your e-mail";
}else{
  $email = $objCon->real_escape_string($_POST['email']);
}

if (empty($errors)){
  header("location: ../index.php?page=reset_pw");
  }
else{
  $_SESSION['FORGOT_PW_ERROR']=$errors;
  header("location:../index.php?page=forgot_pw");
  }
