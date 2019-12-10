<?php

$objCon = new mysqli('localhost', 'nica19.wi2', 'yy335kpq','nica19_wi2_sde_dk');

if ($objCon->connect_errno) {
	die('kan ikke forbinde(' . $objCon->connect_errno . ')'.$objCon->connect_errno);
}

$objCon->set_charset("utf8");
