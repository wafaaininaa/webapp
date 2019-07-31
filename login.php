<?php
	include_once "koneksi.php";

	class usr{}
	session_start();
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	if ((empty($username)) || (empty($password))) { 
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Kolom tidak boleh kosong"; 
	 	die(json_encode($response));
	}
	
	$query = mysqli_query($connect, "SELECT * FROM apps WHERE username='$username' AND password='$password'");
	
	$row = mysqli_fetch_array($query);
	$_SESSION['id'] = $row['user_id'];

	if (!empty($row)){
	 	$response = new usr();
		$response->success = 1;
		$response->message = "Selamat datang ".$row['username'];
	 	$response->id = $row['user_id'];
	 	$response->username = $row['username'];
	 	die(json_encode($response));
	 	

			} else { 
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Username atau password salah";
	 	die(json_encode($response));
	}
	
	mysqli_close($connect);

?>