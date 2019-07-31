<?php
 
include 'koneksi.php';

// Create connection
$con = new mysqli($server, $username, $password, $database);
//this is our upload folder
$upload_path = 'uploads_file_user/';
 
//Getting the server ip
$server_ip = gethostbyname(gethostname());
 
//creating the upload url

$upload_url = 'https://'.$server_ip.$upload_path;
//$upload_url = 'http://'.$server_ip.'/staff_Tracking/'.$upload_path;
//response array
$response = array();
 
 
if($_SERVER['REQUEST_METHOD']=='POST'){
 
    //checking the required parameters from the request
    if(isset($_POST['user_id']) and isset($_POST['keterangan']) and isset($_POST['hari']) and isset($_POST['tanggal']) and isset($_POST['jam']) and isset($_FILES['pdf']['name'])){
 
        //connecting to the database
        $con = mysqli_connect("localhost","id10198469_root","webapp","id10198469_webapp") or die('Unable to Connect...');
        //$con = new mysqli("localhost", "root", "", "webapp");
        //getting name from the request
        $user_id = $_POST['user_id'];
        $keterangan = $_POST['keterangan'];
        $hari = $_POST['hari'];
        $tanggal = $_POST['tanggal'];
        $jam = $_POST['jam'];
 
        //getting file info from the request
        $fileinfo = pathinfo($_FILES['pdf']['name']);
 
        //getting the file extension
        $extension = $fileinfo['extension'];
 
        //file url to store in the database
        $file_url = $upload_url . getFileName() . '.' . $extension;
 
        //file path to upload in the server
        $file_path = $upload_path . getFileName() . '.'. $extension;
 
        //trying to save the file in the directory
        try{

            $sql = "INSERT INTO kegiatanusers (user_id, url, keterangan, hari, tanggal, jam) VALUES ('$user_id', '$file_url', '$keterangan', '$hari','$tanggal', '$jam') ;";
 
            //adding the path and name to database
            if(mysqli_query($con,$sql)){
                 //saving the file
                move_uploaded_file($_FILES['pdf']['tmp_name'],$file_path);
                //filling response array with values
                $response['error'] = false;
                $response['user_id'] = $user_id;
                $response['url'] = $file_url;
                $response['keterangan'] = $keterangan;
                $response['hari'] = $hari;
                $response['tanggal'] = $tanggal;
                $response['jam'] = $jam;
            }
            //if some error occurred
        }catch(Exception $e){
            $response['error']=true;
            $response['message']=$e->getMessage();
        } 
        //closing the connection
        mysqli_close($con);
    }else{
        $response['error']=true;
        $response['message']='Please choose a file';
    }
    
    //displaying the response
    echo json_encode($response);
}
 
/*
We are generating the file name
so this method will return a file name for the image to be upload
*/
function getFileName(){
    $con = mysqli_connect("localhost","id10198469_root","webapp","id10198469_webapp");
    $sql = "SELECT max(id) as id FROM kegiatanusers";
    $result = mysqli_fetch_array(mysqli_query($con,$sql));
 
    mysqli_close($con);
    if($result['id']==null)
        return 1;
    else
        return ++$result['id'];
}

?>
