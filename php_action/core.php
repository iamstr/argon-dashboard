<?php 

session_start();

require_once 'db_connect.php';
require_once 'functions.php';

// echo $_SESSION['userId'];

if(!$_SESSION['user']) {
	header('location:'.$store_url);	
} 



?>