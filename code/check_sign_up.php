<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

    require_once '../includes/dbconnect.php';
    session_start();

    $errors = array();

    if (empty($_POST['password'])) {
        $errors[] = "Please fill in a password";
    }else{
        if (strcmp($_POST['password'], $_POST['re-password']) === 0) {
            $password = $objCon->real_escape_string($_POST['password']);
        }else{
            $errors[] = "The 2 provided passwords are not the same, please try again";
        }
    }

    if (empty($_POST['username'])) {
        $errors[] = "Please fill in a username";
    }else{
        $username = $objCon->real_escape_string($_POST['username']);

        //username in use check
        $sql = "SELECT username FROM users WHERE username = '$username'";
        $result = $objCon->query($sql);
        $amount = $result->num_rows;
        if ($amount == 1) {
            $errors[] = "Username is in use, please try another username";
        }
    }

    // Valider email
    if(empty($_POST['email'])){
        $errors[] = "Please fill in an e-mail";
    }
    else{
        // Remove all illegal characters from email
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

        // Validate e-mail
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $success[] = "it's a valid email address";
        } else {
            $errors[] = "it's not a valid email address, please try again";
        }
    }

     // Any errors?
    if (sizeof($errors) > 0){
        // YES, save errors in a session
        $_SESSION["SIGN_UP_ERROR"] = $errors;
        header("location: ../index.php?page=sign_up");
    }
    else{
        // NO, then we can move data to the database.
        $hashpw = password_hash($password, PASSWORD_DEFAULT);

        echo $sql_user_insert = "INSERT INTO users(username, password, email, auth, created)
            VALUES('$username','$hashpw','$email','2',NOW())";

        $result = $objCon->query($sql_user_insert);
        header("location: ../index.php?page=home");
        $objCon->close;
    }
