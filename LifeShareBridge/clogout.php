<?php 
session_start();
if(isset($_SESSION['login'])){
	
	unset($_SESSION['login']);
	
	if(!isset($_SESSION['login'])){
		header("location:login.php");
	}
}