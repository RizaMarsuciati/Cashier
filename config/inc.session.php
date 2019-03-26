<?php
session_start();
 
// mengecek ada tidaknya session untuk username
if (!isset($_SESSION['username']))
{
include "login.php";
	exit;
}

?>