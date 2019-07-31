<?php 
	
	//database constants
	define('DB_HOST', 'localhost');
	define('DB_USER', 'id10198469_root');
	define('DB_PASS', 'webapp');
	define('DB_NAME', 'id10198469_webapp');
	
	//connecting to database and getting the connection object
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	
	//Checking if any error occured while connecting
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}
	
	//creating a query
	$stmt = $conn->prepare("SELECT user_id, nama, nip, kategoriTenaga, jabatan FROM apps;");
	
	//executing the query 
	$stmt->execute();
	
	//binding results to the query 
	$stmt->bind_result($user_id, $nama, $nip, $kategoriTenaga, $jabatan);
	
	$users = array(); 
	
	//traversing through all the result 
	while($stmt->fetch()){
		$temp = array();
		$temp['user_id'] = $user_id; 
		$temp['nama'] = $nama; 
		$temp['nip'] = $nip; 
		$temp['kategoriTenaga'] = $kategoriTenaga; 
		$temp['jabatan'] = $jabatan;  
		array_push($users, $temp);
	}
	
	//displaying the result in json format 
	echo json_encode($users);