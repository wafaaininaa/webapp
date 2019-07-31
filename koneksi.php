<?php
	$server		= "localhost"; //sesuaikan dengan nama server
	$username	= "id10198469_root"; //sesuaikan username
	$password	= "webapp"; //sesuaikan password
	$database	= "id10198469_webapp"; //sesuaikan target databese
	
	$connect = mysqli_connect($server,$username,$password,$database)or 
	die("gagal, database tidak ditemukan");
?>