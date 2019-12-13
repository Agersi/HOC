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

if(empty($_POST['password'])){
    $errors[] = "Please type in your password";
}else{
    $password = trim($_POST['password']);
}

if (empty($errors)){
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $objCon->query($sql);
    $antal = $result->num_rows;
    if ($antal == 1) {
        $row = $result->fetch_object();
        if (password_verify($password, $row->password)) {
            $_SESSION['auth'] = $row->auth;
            $_SESSION['username'] = $row->username;
            $_SESSION['id'] = $row->id;

            header("location: ../index.php?page=home");

        }else{
            $errors[] = "The password do not match";
            $_SESSION['SIGN_IN_ERROR']=$errors;
            header("location:../index.php?page=sign_in");
        }
    }else{
        $errors[] = "The email do not match";
        $_SESSION['SIGN_IN_ERROR']=$errors;
        header("location:../index.php?page=sign_in");
    }
}
