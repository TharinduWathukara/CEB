<?php
/**
 * Created by PhpStorm.
 * User: tharindu
 * Date: 11/8/17
 * Time: 5:09 PM
 */

require 'db.connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$branch = $_POST['branch'];
$position = $_POST['position'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$serviceArea='';


if($password==$cpassword){

    $sql1="insert into Employee VALUE ('','$branch','$name','$email','$mobile')";
    if (mysqli_query($connection, $sql1)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}else{
    echo 'check password again';
}

$sql2="select ID from Employee where name='$name' and email='$email' and contact_No='$mobile'";
$result2 = mysqli_query($connection,$sql2);

if(!$row2=mysqli_fetch_assoc($result2)){
    echo "";
}else{
    $id=$row2['ID'];
}

$sql3="insert into Employee_Credentials VALUE ('$id',aes_encrypt('$password','tharindu'),'$position')";
if (mysqli_query($connection, $sql3)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
}

if($position=='manager'){
    $sql4="insert into Manager VALUE ('$id')";
    if (mysqli_query($connection, $sql4)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
    }
}elseif ($position=="cashier"){
    $sql5="insert into Cashier VALUE ('$id')";
    if (mysqli_query($connection, $sql5)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql5 . "<br>" . mysqli_error($conn);
    }
}elseif ($position=="meterReader"){
    $serviceArea=$_POST['serviceArea'];
    $sql6="insert into Meter_Reader VALUE ('$id','$serviceArea')";
    if (mysqli_query($connection, $sql6)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql6 . "<br>" . mysqli_error($conn);
    }
}

header("Location: ../../home.php");