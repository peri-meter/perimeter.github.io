<?php $servername = "localhost";
$username = "root";
$password = "";
$DBName = 'selambanksc';

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
$sql = "CREATE DATABASE $DBName";
$conn->query($sql);
$conn->close();
function execQuery($command){
  $conn2 = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['DBName']);
  if ($conn2->connect_error) die("Connection failed: " . $conn2->connect_error);
  $conn2->query($command);
  $conn2->close();
}
execQuery("CREATE TABLE shares (
        shareId       INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname        VARCHAR(255) NULL,
        lastname        VARCHAR(255) NULL,
        phone        VARCHAR(255)  NULL,
        email VARCHAR(255) NULL,
        nationality VARCHAR(255) NULL,
        country VARCHAR(255) NULL,
        city VARCHAR(255) NULL,
        stat VARCHAR(255) NULL,
        zipcode VARCHAR(255) NULL,
        passportnumber VARCHAR(255) NULL,
        yellowcardNumber VARCHAR(255) NULL,
        currency VARCHAR(255) NULL,
        numofShares VARCHAR(255) NULL,
        subscribedamount VARCHAR(255) NULL,
        paidmount VARCHAR(255) NULL,
        servicecharge VARCHAR(255) NULL,
        agentname VARCHAR(255) NULL,
        agentphone VARCHAR(255) NULL,
        paydate DATE
   )");
   execQuery("CREATE TABLE images (
    imageId       INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    imagename        VARCHAR(255) NULL,
    shareId      INT,
    FOREIGN KEY (shareID) REFERENCES shares(PersonID)
)");
$conn3 = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['DBName']);
if ($conn3->connect_error) die("Connection failed: " . $conn3->connect_error);
$insertCommand = $conn3->prepare("INSERT INTO shares VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,NOW())");
$insertCommand->bind_param("ssssssssssssssssss",$fname,$lname,$phone,$email,$nationality,$country,$city,$state,$zipcode,$passportnumber,$yellowcardnumber,$currency,$numshare,$subscribedamount,$paidamount,$servicecharge,$agentname,$agentphone);
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$phone = $_POST['user_phone_number']; 
$email = $_POST['email_address'];
$nationality = $_POST['nationality'];
$country = $_POST['country'];
$city =  $_POST['city'];
$state =  $_POST['state'];
$zipcode =  $_POST['postal'];
$passportnumber =   $_POST['pass-port'];
$yellowcardnumber =  $_POST['yellow-card'];
$currency = $_POST['currency'];
$numshare = $_POST['number-of-share'];
$paidamount =   $_POST['paid-amount'];
$agentname =  $_POST['agent_name'];
$agentphone =  $_POST['agent_phone'];
$subscribedamount =  $_POST['share-sub'];
$servicecharge =  $_POST['service-charge'];
$insertCommand->execute();
$shareId = $conn3->insert_id;
if(!empty($_FILES['upload_img']['name'])){
	if(!file_exists("./uploads")) mkdir("uploads");
    $files = array_filter($_FILES['upload_img']['name']);
    $countfiles = count($files);
    for($i=0;$i<$countfiles;$i++){
        $name = $_FILES['upload_img']['name'][$i];
        $temp = $_FILES['upload_img']['tmp_name'][$i];
        $imageFileType = pathinfo($name,PATHINFO_EXTENSION); 
        $fullFileName =  $shareId.'_'.($i+1).'.'.$imageFileType;
        move_uploaded_file($temp, "./uploads/img_".$fullFileName);
        $insertCommand = $conn3->prepare("INSERT INTO images VALUES (NULL,?,?)");
        $insertCommand->bind_param("si",$img,$sid);
        $img = $fullFileName;
        $sid = $shareId;
        $insertCommand->execute();
    }
}
header( "Location: confirmshare.html" );

    ?>
