<?php

$objCon = new mysqli('localhost', 'root', '', 'hoc');

if ($objCon->connect_errno) {
	die('kan ikke forbinde(' . $objCon->connect_errno . ')'.$objCon->connect_errno);
}

$objCon->set_charset("utf8");
?>
