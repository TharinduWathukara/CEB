<?php 

include 'db.connect.php';

$connection=$_SESSION['connection'];

$NIC=$_POST['NIC'];
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$comments=$_POST['comments'];
$branch=$_POST['branch'];
$branch=  "SELECT * FROM branch WHERE location='$branch'";
$branch = mysqli_query($connection,$branch);
$branch = mysqli_fetch_assoc($branch);
$branch=$branch['ID'];
$contact=$_POST['contact'];

$date = new DateTime();
$timezone = date_default_timezone_get();
date_default_timezone_set('Asia/Colombo');

$year=date("Y");
    $month=date("m");
   
    $day=date("d");
    
    $sent_date=''.$year.'.'.$month.'.'.$day;


/*$sql  =$connection->prepare( "INSERT INTO `non_register_customer` (`name`, `NIC`, `address`, `email`, `contact_No`, `branch`,`date_time`) VALUES ('$name', '$NIC', '$address', '$email', '$contact', '$branch','$sent_date')");*/
$sql  =$connection->prepare( "INSERT INTO `non_register_customer` (`name`, `NIC`, `address`, `email`, `contact_No`, `branch`,`date_time`) VALUES (?, ?, ?, ?, ?, ?,?)");

$sql->bind_param("sssssss", $name,$NIC,$address,$email,$contact,$branch,$sent_date);
   $sql->execute(); 
    $result=$sql->get_result();
/*
if ($connection->query($sql) === TRUE) {
    echo "Record3 updated successfully";
    } else {
    echo "Error updating : " . $connection->error;
    }
*/


?>