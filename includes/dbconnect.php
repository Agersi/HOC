<?php

$objCon = new mysqli('127.0.0.1', 'root', '', '');

if ($objCon->connect_errno) {
	die('kan ikke forbinde(' . $objCon->connect_errno . ')'.$objCon->connect_errno);
}

$objCon->set_charset("utf8");
?>
