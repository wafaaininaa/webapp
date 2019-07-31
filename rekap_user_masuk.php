<?php 
	
	include_once "koneksi.php";
		

	//creating a query
	$stmt = $connect->prepare("SELECT presensihadir.hari, presensihadir.tanggal, presensihadir.jam, apps.nama 
			FROM presensihadir JOIN apps ON presensihadir.user_id = apps.user_id;");
	
	//executing the query 
	$stmt->execute();
	
	//binding results to the query 
	$stmt->bind_result($hari, $tanggal, $jam, $nama);
	
	$presensihadir= array(); 
	
	//traversing through all the result 
	while($stmt->fetch()){
		$temp = array();
		$temp['hari'] = $hari; 
		$temp['tanggal'] = $tanggal; 
		$temp['jam'] = $jam; 
		$temp['nama'] = $nama;
		array_push($presensihadir, $temp);
	}
	
	echo json_encode($presensihadir);

?>