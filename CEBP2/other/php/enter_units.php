
<?php 
include 'db.connect.php';

$connection=$_SESSION['connection'];
$userID=$_SESSION["userID"] ;

$customerID=$_POST['userID'];
$units=$_POST['units'];

$sql_customer  = "SELECT * FROM `customer` WHERE ID='$customerID'";
$result_customer = mysqli_query($connection,$sql_customer);
$row_customer = mysqli_fetch_assoc($result_customer);
//$connec_type=$row_customer['connection_type'];

$sql1 = "select * from domestic  where ID='$customerID' ";
$sql2 = "select * from general  where ID='$customerID' ";
$sql3 = "select * from industrial  where ID='$customerID' ";

$result1 = mysqli_query($connection,$sql1);
    $result2= mysqli_query($connection,$sql2);
    $result3= mysqli_query($connection,$sql3);
    
if(mysqli_fetch_assoc($result1)){
        $connec_type=1;
    }
elseif(mysqli_fetch_assoc($result2)){
        $connec_type=2;
    }
elseif(mysqli_fetch_assoc($result3)){
        $connec_type=3;
    }
$date = new DateTime();
$timezone = date_default_timezone_get();
date_default_timezone_set('Asia/Colombo');

$year=date("Y");
$month=date("m");
$day=date("d");
$day=(int)$day;
$day=$day+10;
 $duedate=''.$year.'.'.$month.'.'.$day;

$newbill=0;
$sql_table=array();

if($connec_type==1){
    $sql_cost="select * from `domestic_costing`";
        
}
elseif($connec_type==2){
    $sql_cost="select * from `general_costing`";
}
elseif($connec_type==3){
    $sql_cost="select * from `industrial_costing`";
}
$result_cost = mysqli_query($connection,$sql_cost);
    while($row = mysqli_fetch_assoc($result_cost)){

  // add each row returned into an array
    $array[] = $row;

  // OR just echo the data:
   // etc

}
print_r($array);
$count=0;
if($connec_type==1){
    
        foreach ($array as &$value) {
            if($value["unit_range"]>=$units){
                $newbill+=($units-$count)*$value['price'];
                break;} 
            else{
                $countnew=$value["unit_range"];
                $newbill+=$value['fixed']+($countnew-$count)*$value['price'];
                $count=$countnew;
            }
        
        }
        unset($value);
    
    
    
}
else{
   foreach ($array as &$value) {
            if($value["unit_range"]>=$units){
                $newbill+=$value['fixed']+($units-$count)*$value['price'];
                
                break;} 
            else{
                $countnew=$value["unit_range"];
                $newbill+=($countnew-$count)*$value['price'];
                $count=$countnew;
            }
        
        }
        unset($value); 
    
    
}
$sql_month_rec= "SELECT * FROM `used_unites` WHERE `customer_ID`='$customerID' AND `year`='$year' AND month='$month'";
$result_month_rec = mysqli_query($connection,$sql_month_rec);








if($row=mysqli_fetch_array($result_month_rec)){
    
    
    $sql_monthrec_in="UPDATE `used_unites` SET `no_Of_Units`='$units',`bill_For_That_Month`='$newbill',`meter_reader_ID`='$userID' WHERE customer_ID='$customerID' and `year`='$year' and `month`='$month'";
    
    if ($connection->query($sql_monthrec_in) === TRUE) {
    echo "Record2 updated successfully";
    } else {
    echo "Error updating record2: " . $connection->error;
    }
}

else{
    
    $sql_insert  = "INSERT INTO `used_unites` (`year`, `month`, `customer_ID`, `no_Of_Units`, `bill_For_That_Month`, `meter_reader_ID`) VALUES ('$year', '$month', '$customerID', '$units',  '$newbill','$userID')";
    
    if ($connection->query($sql_insert) === TRUE) {
    echo "Record3 updated successfully";
    } else {
    echo "Error updating record3: " . $connection->error;
    }
    }

$sql_bill  = "SELECT * from bill where customer_ID='$customerID'";
$result_bill = mysqli_query($connection,$sql_bill);



if($row=mysqli_fetch_array($result_bill)){
    
    $lastbill=$row['last_Bill_Amount'];
    $lastbill=$newbill;
    $outsatnding=$lastbill+$newbill;
    
    $sql_bill_in="UPDATE `bill` SET `last_Bill_Amount`='$newbill',`current_Outstanding`='$outsatnding',`due_Date`='$duedate' WHERE customer_ID='$customerID'";
    
    if ($connection->query($sql_bill_in) === TRUE) {
    echo "Record2 updated successfully";
    } else {
    echo "Error updating record2: " . $connection->error;
    }
}

else{
    
    $sql_bill_in  = "INSERT into bill VALUES('$customerID','$newbill','$newbill','$duedate')";
    
    if ($connection->query($sql_bill_in) === TRUE) {
    echo "Record3 updated successfully";
    } else {
    echo "Error updating record3: " . $connection->error;
    }
    }

header("Location: ../../meter_reader.php");
?>



