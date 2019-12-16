<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

require_once '../includes/dbconnect.php';
session_start();

$errors = array();


//Check input type=hidden value and store in $product_id
if(empty($_POST['product_id'])){
  $errors[] = "Input hidden not working";
}
else{
  $product_id = $objCon->real_escape_string($_POST['product_id']);
}


//Do stuff based on the ID send in input type=hidden
if ($product_id == 1){

  //Check product_name value and store in $product_name
  if(empty($_POST['product_name'])){
    $errors[] = "Please fill in the name option";
  }
  else{
    $product_name = $objCon->real_escape_string($_POST['product_name']);
  }

  //Check product_panel value and store in $product_panel
  if(empty($_POST['product_panel'])){
    $errors[] = "Please fill in the Dashboard option";
  }
  else{
    $product_panel = $objCon->real_escape_string($_POST['product_panel']);
  }

  //Check product_push value and store in $product_push
  if(empty($_POST['product_push'])){
    $errors[] = "Please fill in the Push option";
  }
  else{
    $product_push = $objCon->real_escape_string($_POST['product_push']);
  }

  //Check product_users value and store in $product_users
  if(empty($_POST['product_users'])){
    $errors[] = "Please fill in the users option";
  }
  else{
    $product_users = $objCon->real_escape_string($_POST['product_users']);
  }

  //Check product_lang value and store in $product_lang
  if(empty($_POST['product_lang'])){
    $errors[] = "Please fill in the languish option";
  }
  else{
    $product_lang = $objCon->real_escape_string($_POST['product_lang']);
  }

  //Check product_content value and store in $product_content
  if(empty($_POST['product_content'])){
    $errors[] = "Please fill in the content types option";
  }
  else{
    $product_content = $objCon->real_escape_string($_POST['product_content']);
  }

  //Check product_storage value and store in $product_storage
  if(empty($_POST['product_storage'])){
    $errors[] = "Please fill in the storage option";
  }
  else{
    $product_storage = $objCon->real_escape_string($_POST['product_storage']);
  }

  //Check product_transfer value and store in $product_transfer
  if(empty($_POST['product_transfer'])){
    $errors[] = "Please fill in the transfer option";
  }
  else{
    $product_transfer = $objCon->real_escape_string($_POST['product_transfer']);
  }

  //Check product_email_support value and store in $product_email_support
  if(empty($_POST['product_email_support'])){
    $errors[] = "Please fill in the email_support option";
  }
  else{
    $product_email_support = $objCon->real_escape_string($_POST['product_email_support']);
  }

  //Check product_price value and store in $product_price
  if(empty($_POST['product_price'])){
    $errors[] = "Please fill in the price option";
  }
  else{
    $product_price = $objCon->real_escape_string($_POST['product_price']);
  }

  // Any errors?
  if (sizeof($errors) > 0){
     // YES, save errors in a session
     $_SESSION["EDIT_PRODUCT_ERROR"] = $errors;
     header("location: ../index.php?page=admin&succes=no");
  }
  else{
     // NO, then we can update data in the database.
     echo $sql_product_edit_one = "UPDATE `products`
                                   SET `product_name`='$product_name',
                                      `product_panel`='$product_panel',
                                      `product_push`='$product_push',
                                      `product_users`='$product_users',
                                      `product_lang`='$product_lang',
                                      `product_content`='$product_content',
                                      `product_storage`='$product_storage',
                                      `product_transfer`='$product_transfer',
                                      `product_email_support`='$product_email_support',
                                      `product_price`='$product_price'
                                   WHERE `product_id`='$product_id'";

     $result_one = $objCon->query($sql_product_edit_one);
     header("location: ../index.php?page=admin&succes=yes");
     $objCon->close;
  }

  //END OF EDIT PRODUCT ONE


}
elseif($product_id == 2){

  //Check product_name value and store in $product_name
  if(empty($_POST['product_name'])){
    $errors[] = "Please fill in the name option";
  }
  else{
    $product_name = $objCon->real_escape_string($_POST['product_name']);
  }

  //Check product_panel value and store in $product_panel
  if(empty($_POST['product_panel'])){
    $errors[] = "Please fill in the Dashboard option";
  }
  else{
    $product_panel = $objCon->real_escape_string($_POST['product_panel']);
  }

  //Check product_push value and store in $product_push
  if(empty($_POST['product_push'])){
    $errors[] = "Please fill in the Push option";
  }
  else{
    $product_push = $objCon->real_escape_string($_POST['product_push']);
  }

  //Check product_users value and store in $product_users
  if(empty($_POST['product_users'])){
    $errors[] = "Please fill in the users option";
  }
  else{
    $product_users = $objCon->real_escape_string($_POST['product_users']);
  }

  //Check product_lang value and store in $product_lang
  if(empty($_POST['product_lang'])){
    $errors[] = "Please fill in the languish option";
  }
  else{
    $product_lang = $objCon->real_escape_string($_POST['product_lang']);
  }

  //Check product_content value and store in $product_content
  if(empty($_POST['product_content'])){
    $errors[] = "Please fill in the content types option";
  }
  else{
    $product_content = $objCon->real_escape_string($_POST['product_content']);
  }

  //Check product_storage value and store in $product_storage
  if(empty($_POST['product_storage'])){
    $errors[] = "Please fill in the storage option";
  }
  else{
    $product_storage = $objCon->real_escape_string($_POST['product_storage']);
  }

  //Check product_transfer value and store in $product_transfer
  if(empty($_POST['product_transfer'])){
    $errors[] = "Please fill in the transfer option";
  }
  else{
    $product_transfer = $objCon->real_escape_string($_POST['product_transfer']);
  }

  //Check product_email_support value and store in $product_email_support
  if(empty($_POST['product_email_support'])){
    $errors[] = "Please fill in the email support option";
  }
  else{
    $product_email_support = $objCon->real_escape_string($_POST['product_email_support']);
  }

  //Check product_plugins value and store in $product_plugins
  if(empty($_POST['product_plugins'])){
    $errors[] = "Please fill in the plugins option";
  }
  else{
    $product_plugins = $objCon->real_escape_string($_POST['product_plugins']);
  }

  //Check product_price value and store in $product_price
  if(empty($_POST['product_price'])){
    $errors[] = "Please fill in the price option";
  }
  else{
    $product_price = $objCon->real_escape_string($_POST['product_price']);
  }

  // Any errors?
  if (sizeof($errors) > 0){
     // YES, save errors in a session
     $_SESSION["EDIT_PRODUCT_ERROR"] = $errors;
     header("location: ../index.php?page=admin");
  }
  else{
     // NO, then we can update data in the database.
     echo $sql_product_edit_two = "UPDATE `products`
                              SET `product_name`='$product_name',
                                  `product_panel`='$product_panel',
                                  `product_push`='$product_push',
                                  `product_users`='$product_users',
                                  `product_lang`='$product_lang',
                                  `product_content`='$product_content',
                                  `product_storage`='$product_storage',
                                  `product_transfer`='$product_transfer',
                                  `product_email_support`='$product_email_support',
                                  `product_plugins`='$product_plugins',
                                  `product_price`='$product_price'
                              WHERE `product_id`='$product_id'";

     $result_two = $objCon->query($sql_product_edit_two);
     header("location: ../index.php?page=admin");
     $objCon->close;
  }

  //END OF EDIT PRODUCT TWO


}
elseif($product_id == 3){

  //Check product_name value and store in $product_name
  if(empty($_POST['product_name'])){
    $errors[] = "Please fill in the name option";
  }
  else{
    $product_name = $objCon->real_escape_string($_POST['product_name']);
  }

  //Check product_panel value and store in $product_panel
  if(empty($_POST['product_panel'])){
    $errors[] = "Please fill in the Dashboard option";
  }
  else{
    $product_panel = $objCon->real_escape_string($_POST['product_panel']);
  }

  //Check product_push value and store in $product_push
  if(empty($_POST['product_push'])){
    $errors[] = "Please fill in the Push option";
  }
  else{
    $product_push = $objCon->real_escape_string($_POST['product_push']);
  }

  //Check product_users value and store in $product_users
  if(empty($_POST['product_users'])){
    $errors[] = "Please fill in the users option";
  }
  else{
    $product_users = $objCon->real_escape_string($_POST['product_users']);
  }

  //Check product_lang value and store in $product_lang
  if(empty($_POST['product_lang'])){
    $errors[] = "Please fill in the languish option";
  }
  else{
    $product_lang = $objCon->real_escape_string($_POST['product_lang']);
  }

  //Check product_content value and store in $product_content
  if(empty($_POST['product_content'])){
    $errors[] = "Please fill in the content types option";
  }
  else{
    $product_content = $objCon->real_escape_string($_POST['product_content']);
  }

  //Check product_storage value and store in $product_storage
  if(empty($_POST['product_storage'])){
    $errors[] = "Please fill in the storage option";
  }
  else{
    $product_storage = $objCon->real_escape_string($_POST['product_storage']);
  }

  //Check product_transfer value and store in $product_transfer
  if(empty($_POST['product_transfer'])){
    $errors[] = "Please fill in the transfer option";
  }
  else{
    $product_transfer = $objCon->real_escape_string($_POST['product_transfer']);
  }

  //Check product_email_support value and store in $product_email_support
  if(empty($_POST['product_email_support'])){
    $errors[] = "Please fill in the email support option";
  }
  else{
    $product_email_support = $objCon->real_escape_string($_POST['product_email_support']);
  }

  //Check product_plugins value and store in $product_plugins
  if(empty($_POST['product_plugins'])){
    $errors[] = "Please fill in the plugins option";
  }
  else{
    $product_plugins = $objCon->real_escape_string($_POST['product_plugins']);
  }

  //Check product_phone_support value and store in $product_phone_support
  if(empty($_POST['product_phone_support'])){
    $errors[] = "Please fill in the phone support option";
  }
  else{
    $product_phone_support = $objCon->real_escape_string($_POST['product_phone_support']);
  }

  //Check product_price value and store in $product_price
  if(empty($_POST['product_price'])){
    $errors[] = "Please fill in the price option";
  }
  else{
    $product_price = $objCon->real_escape_string($_POST['product_price']);
  }

    // Any errors?
    if (sizeof($errors) > 0){
       // YES, save errors in a session
       $_SESSION["EDIT_PRODUCT_ERROR"] = $errors;
       header("location: ../index.php?page=admin");
    }
    else{
       // NO, then we can update data in the database.
       $sql_product_edit_three = "UPDATE `products`
                                  SET `product_name`='$product_name',
                                      `product_panel`='$product_panel',
                                      `product_push`='$product_push',
                                      `product_users`='$product_users',
                                      `product_lang`='$product_lang',
                                      `product_content`='$product_content',
                                      `product_storage`='$product_storage',
                                      `product_transfer`='$product_transfer',
                                      `product_email_support`='$product_email_support',
                                      `product_plugins`='$product_plugins',
                                      `product_phone_support`='$product_phone_support',
                                      `product_price`='$product_price'
                                  WHERE `product_id`='$product_id'";

       $result_three = $objCon->query($sql_product_edit_three);
       header("location: ../index.php?page=admin");
       $objCon->close;
    }

    //END OF EDIT PRODUCT THREE


}
elseif($product_id == 4){

  //Check product_name value and store in $product_name
  if(empty($_POST['product_name'])){
    $errors[] = "Please fill in the name option";
  }
  else{
    $product_name = $objCon->real_escape_string($_POST['product_name']);
  }

  //Check product_panel value and store in $product_panel
  if(empty($_POST['product_panel'])){
    $errors[] = "Please fill in the Dashboard option";
  }
  else{
    $product_panel = $objCon->real_escape_string($_POST['product_panel']);
  }

  //Check product_push value and store in $product_push
  if(empty($_POST['product_push'])){
    $errors[] = "Please fill in the Push option";
  }
  else{
    $product_push = $objCon->real_escape_string($_POST['product_push']);
  }

  //Check product_users value and store in $product_users
  if(empty($_POST['product_users'])){
    $errors[] = "Please fill in the users option";
  }
  else{
    $product_users = $objCon->real_escape_string($_POST['product_users']);
  }

  //Check product_lang value and store in $product_lang
  if(empty($_POST['product_lang'])){
    $errors[] = "Please fill in the languish option";
  }
  else{
    $product_lang = $objCon->real_escape_string($_POST['product_lang']);
  }

  //Check product_content value and store in $product_content
  if(empty($_POST['product_content'])){
    $errors[] = "Please fill in the content types option";
  }
  else{
    $product_content = $objCon->real_escape_string($_POST['product_content']);
  }

  //Check product_storage value and store in $product_storage
  if(empty($_POST['product_storage'])){
    $errors[] = "Please fill in the storage option";
  }
  else{
    $product_storage = $objCon->real_escape_string($_POST['product_storage']);
  }

  //Check product_transfer value and store in $product_transfer
  if(empty($_POST['product_transfer'])){
    $errors[] = "Please fill in the transfer option";
  }
  else{
    $product_transfer = $objCon->real_escape_string($_POST['product_transfer']);
  }

  //Check product_email_support value and store in $product_email_support
  if(empty($_POST['product_email_support'])){
    $errors[] = "Please fill in the email support option";
  }
  else{
    $product_email_support = $objCon->real_escape_string($_POST['product_email_support']);
  }

  //Check product_plugins value and store in $product_plugins
  if(empty($_POST['product_plugins'])){
    $errors[] = "Please fill in the plugins option";
  }
  else{
    $product_plugins = $objCon->real_escape_string($_POST['product_plugins']);
  }

  //Check product_phone_support value and store in $product_phone_support
  if(empty($_POST['product_phone_support'])){
    $errors[] = "Please fill in the phone support option";
  }
  else{
    $product_phone_support = $objCon->real_escape_string($_POST['product_phone_support']);
  }

  //Check product_price value and store in $product_price
  if(empty($_POST['product_price'])){
    $errors[] = "Please fill in the price option";
  }
  else{
    $product_price = $objCon->real_escape_string($_POST['product_price']);
  }

  // Any errors?
  if (sizeof($errors) > 0){
     // YES, save errors in a session
     $_SESSION["EDIT_PRODUCT_ERROR"] = $errors;
     header("location: ../index.php?page=admin");
  }
  else{
     // NO, then we can update data in the database.
     $sql_product_edit_four = "UPDATE `products`
                               SET `product_name`='$product_name',
                                   `product_panel`='$product_panel',
                                   `product_push`='$product_push',
                                   `product_users`='$product_users',
                                   `product_lang`='$product_lang',
                                   `product_content`='$product_content',
                                   `product_storage`='$product_storage',
                                   `product_transfer`='$product_transfer',
                                   `product_email_support`='$product_email_support',
                                   `product_plugins`='$product_plugins',
                                   `product_phone_support`='$product_phone_support',
                                   `product_price`='$product_price'
                                WHERE `product_id`='$product_id'";

     $result_four = $objCon->query($sql_product_edit_four);
     header("location: ../index.php?page=admin");
     $objCon->close;
  }

  //END OF EDIT PRODUCT FOUR


}
else{
  $errors[] = "Input hidden not working";
}
