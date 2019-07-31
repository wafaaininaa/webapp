<?php 
	
	include_once "koneksi.php";
		

	//creating a query
	$stmt = $connect->prepare("SELECT userpulang.hari, userpulang.tanggal, userpulang.jam, apps.nama 
				FROM userpulang JOIN apps ON userpulang.user_id = apps.user_id;");
	
	//executing the query 
	$stmt->execute();
	
	//binding results to the query 
	$stmt->bind_result($hari, $tanggal, $jam, $nama);
	
	$kegiatanusers = array(); 
	
	//traversing through all the result 
	while($stmt->fetch()){
		$temp = array();
		//$temp['user_id'] = $user_id;
		$temp['hari'] = $hari; 
		$temp['tanggal'] = $tanggal; 
		$temp['jam'] = $jam; 
		$temp['nama'] = $nama;
		array_push($kegiatanusers, $temp);
	}
	
	echo json_encode($kegiatanusers);

?>