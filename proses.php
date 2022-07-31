<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) 
{
	$username = $_POST['username'];
	$password	= $_POST['password'];

	$query = mysqli_query("SELECT * FROM user WHERE username='$username' AND password='$password' ");
	if (mysqli_num_rows($query) !== 0) {

		$get = mysqli_fetch_assoc($quary);
		$level = $get['level_user'];
		if ($level=="admin") {
			echo"Anda Admin";
		} if ($level=="user_b") {
			echo"Anda Petugas';
		}
	} else{
		echo"Login Gagal";
	} else{
		header("location: index.php");
	}
	
?>