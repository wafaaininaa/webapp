<?php

include 'koneksi.php';

// Create connection
$conn = new mysqli($server, $username, $password, $database);
 
 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
 $DefaultId = 0;
 
 $UserID = $_POST['userid'];
 $Nama = $_POST['nama'];
 $ImageData = $_POST['image_url'];
 $Day = $_POST['day'];
 $Date = $_POST['date'];
 $Time = $_POST['time'];
 $Lat = $_POST['lat'];
 $Longi = $_POST['longi'];
 $Ket = $_POST['keterangan'];
 
 $GetOldIdSQL ="SELECT id FROM presensihadir ORDER BY id ASC";
 
 $Query = mysqli_query($conn,$GetOldIdSQL);
 
 while($row = mysqli_fetch_array($Query)){
 
 $DefaultId = $row['id'];
 }
 
 $ImagePath = "images_user/$DefaultId.jpg";
 
 //$ServerURL = "https://androidjsonblog.000webhostapp.com/$ImagePath";
 $server_ip = gethostbyname(gethostname());
 
 $ServerURL = 'https://trackingforadmin.000webhostapp.com/'.$ImagePath;
 //$ServerURL = 'http://'.$server_ip.'/staff_Tracking/'.$ImagePath;
 
 $InsertSQL = "insert into presensihadir (user_id,nama,img_url,hari,tanggal,jam,latitude,longitude,keterangan) values ('$UserID','$Nama','$ServerURL','$Day','$Date','$Time','$Lat','$Longi','$Ket')";
 
 if(mysqli_query($conn, $InsertSQL)){

 file_put_contents($ImagePath,base64_decode($ImageData));

 echo "Your Image Has Been Uploaded.";
 }
 
 mysqli_close($conn);
 }else{
 echo "Not Uploaded";
 }

?>