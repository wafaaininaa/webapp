<?php

include 'koneksi.php';

// Create connection
$conn = new mysqli($server, $username, $password, $database);
 
 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
 $DefaultId = 0;
 
 $UserID = $_POST['user_id'];
 $Alasan = $_POST['alasan_absen'];
 $Day = $_POST['hari'];
 $Date = $_POST['tanggal'];
 $Time = $_POST['jam'];
 $Ket = $_POST['keterangan'];
 
 $GetOldIdSQL ="SELECT id FROM presensiabsen ORDER BY id ASC";
 
 $Query = mysqli_query($conn,$GetOldIdSQL);
 
 while($row = mysqli_fetch_array($Query)){
 
 $DefaultId = $row['id'];
 }
 
 $InsertSQL = "insert into presensiabsen (user_id,alasan_absen,hari,tanggal,jam,keterangan) values ('$UserID','$Alasan','$Day','$Date','$Time','$Ket')";
 
 if(mysqli_query($conn, $InsertSQL)){

 echo "Berhasil Submit";
 }
 
 mysqli_close($conn);
 }else{
 echo "Silahkan Submit Ulang";
 }

?>