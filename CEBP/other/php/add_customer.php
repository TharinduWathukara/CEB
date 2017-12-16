<?php 

include 'db.connect.php';

$connection=$_SESSION['connection'];
$branch =$_SESSION['managers_branch'];

$ID=$_POST['ID'];
$email=$_POST['email'];
$connection_type=$_POST['email'];

$name=$_POST['name'];
$pwd=$_POST['pwd'];
$address=$_POST['address'];
$acc=$_POST['acc'];
$contact_num=$_POST['contact_num'];
$con_typ=$_POST['con_typ'];



$con=0;
if($con_typ=='Domestic'){$con=1;}
elseif($con_typ=='General'){$con=2;}
elseif($con_typ=='Industrial'){$con=3;}

$sql  = "INSERT INTO `customer`(`ID`, `branch_ID`, `name`, `address`, `account_Number`, `email`, `contact_No`, `connection_type`) VALUES ('$ID','$branch','$name','$address','$acc','$email','$contact_num','$con')";
$result = mysqli_query($connection,$sql);


$sql  = "INSERT INTO `customer_credentials`(`ID`, `password`) VALUES ('$ID','$pwd')";
$result = mysqli_query($connection,$sql);
header("Location: ../../branch_manager.php");

?>