<?php
/**
 * Created by PhpStorm.
 * User: tharindu
 * Date: 10/29/17
 * Time: 3:42 AM
 */

session_start();

include 'db.connect.php';

$userID=$_POST['userID'];
$psw=$_POST['psw'];

$sql = "select * from Employee_Credentials where ID='$userID' and password='$psw'";
$result = mysqli_query($connection,$sql);

if(!$row=mysqli_fetch_assoc($result)){
    echo "Your username or password is incorrect!";
}else{
    $_SESSION['userID']=$row['ID'];
}

header("Location: ../../index.php");