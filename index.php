<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

//SESSION starter
session_start();

// inkluder database forbindelse
require_once('includes/dbconnect.php');

// inkluder generelle funktioner
require_once('code/functions.php');


// Inkluder vores fil header.php
require_once('includes/header.php');
$pagesFolderPath = "pages/";
$frontPage = "home.php";
// kontroller om der ønskes en underside
if(isset($_GET['page'])){

    // Hent get variabel med ønsket underside
    $page = $_GET['page']; // super global $_GET

    if(file_exists($pagesFolderPath.$page.'.php')){

        // Siden findes - Inkluder undersiden
        include($pagesFolderPath.$page.'.php');
    } else {
        // Den ønskede side findes ikke
        header('location:pages/404.php');
    }
} else {
    // vis forsiden
    include($pagesFolderPath.$frontPage);
}

// Inkluder vores fil footer.php
require_once('includes/footer.php');
