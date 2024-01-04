<?php
session_start();
if(!isset($_SESSION['login'])){
	
	header('location:login.php');
}
include('config.php');

$usercheck=$_SESSION['login'];
$sessql=mysql_query("Select * from customer where c_contact='$usercheck' ");

$row=mysql_fetch_array($sessql);

echo "Welcome to home page..";
?>