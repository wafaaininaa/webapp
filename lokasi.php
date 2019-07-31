<?php

include 'koneksi.php';

// Create connection
$conn = new mysqli($server, $username, $password, $database);
 
 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
 
 $UserID = $_POST['user_id'];
 $latitude = $_POST['latitude'];
 $longitude = $_POST['longitude'];
 $tanggal = $_POST['tanggal'];
 $jam = $_POST['jam'];

 $InsertSQL = "INSERT into location (user_id,lokasi,tanggal,jam) VALUES ('$UserID', GeomFromText('POINT($latitude $longitude)'),'$tanggal','$jam')";
 
 if(mysqli_query($conn, $InsertSQL)){

 echo "Berhasil Submit";
 }
 
 mysqli_close($conn);
 }else{
 echo "Silahkan Submit Ulang";
 }

?>