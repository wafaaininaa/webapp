<?php

include 'koneksi.php';

// Create connection
$conn = new mysqli($server, $username, $password, $database);
 
 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
 $DefaultId = 0;
 
 $UserID = $_POST['user_id'];
 $Ket = $_POST['keterangan'];
 $Day = $_POST['hari'];
 $Date = $_POST['tanggal'];
 $Time = $_POST['jam'];
 
 $GetOldIdSQL ="SELECT id FROM userpulang ORDER BY id ASC";
 
 $Query = mysqli_query($conn,$GetOldIdSQL);
 
 while($row = mysqli_fetch_array($Query)){
 
 $DefaultId = $row['id'];
 }
 
 $InsertSQL = "insert into userpulang (user_id,keterangan,hari,tanggal,jam) values ('$UserID','$Ket','$Day','$Date','$Time')";
 
 if(mysqli_query($conn, $InsertSQL)){

 echo "Berhasil Submit";
 }
 
 mysqli_close($conn);
 }else{
 echo "Silahkan Submit Ulang";
 }

?>