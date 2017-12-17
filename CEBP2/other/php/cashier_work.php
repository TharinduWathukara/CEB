<?php
/**
 * Created by PhpStorm.
 * User: tharindu
 * Date: 10/29/17
 * Time: 3:42 AM
 */
//session_start();

include 'db.connect.php';

$connection=$_SESSION['connection'];

$customerID=$_POST['customerID'];
$amount=$_POST['amount'];

$sql_branch  = "SELECT * FROM `customer` WHERE ID='$customerID'";
$result_branch = mysqli_query($connection,$sql_branch);
$row_branch = mysqli_fetch_assoc($result_branch);
$branchID=$row_branch['branch_ID'];


$userID=$_SESSION["userID"] ;

$date = new DateTime();
$timezone = date_default_timezone_get();
date_default_timezone_set('Asia/Colombo');

$year=date("Y");
$month=date("m");
$day=date("d");

$date=''.$year.'.'.$month.'.'.$day;

$sql  = "INSERT INTO `transaction` (`customer_ID`, `branch_ID`, `cashier_ID`, `date`, `amount`) VALUES ('$customerID', '$branchID', '$userID', '$date', '$amount')";

if ($connection->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $connection->error;
}


$sql_bill  = "SELECT * from bill where customer_ID='$customerID'";
$result_bill = mysqli_query($connection,$sql_bill);

if($row=mysqli_fetch_array($result_bill)){
    
    $lastbill=$row['last_Bill_Amount'];
    $outstanding=$row['current_Outstanding'];
    $duedate=$row['due_Date'];
    
    $outstanding=$outstanding-$amount;
    $sql_update  = "UPDATE bill SET current_Outstanding='$outstanding' where customer_ID='$customerID'";
    
    if ($connection->query($sql_update) === TRUE) {
    echo "Record2 updated successfully";
    } else {
    echo "Error updating record2: " . $connection->error;
}
}
else{
    $date = new DateTime();
    $timezone = date_default_timezone_get();
    date_default_timezone_set('Asia/Colombo');

    $year=date("Y");
    $month=date("m");
    $month=(int)$month;
    $month=$month+1;
    $day=date("d");
    
    $due_date=''.$year.'.'.$month.'.'.$day;

    $outstanding=0-$amount;
    
    
    $sql_insert  = "INSERT INTO `bill`(`customer_ID`, `last_Bill_Amount`, `current_Outstanding`, `due_Date`) VALUES ('$customerID','0','$outstanding','$due_date')";
    if ($connection->query($sql_insert) === TRUE) {
    echo "Record3 updated successfully";
    } else {
    echo "Error updating record3: " . $connection->error;
    }
}



header("Location: ../../cashier.php");
    

