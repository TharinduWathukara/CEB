<?php 

include 'db.connect.php';

$connection=$_SESSION['connection'];


$ID=$_POST['ID'];
$email=$_POST['email'];

$name=$_POST['name'];
$pwd=$_POST['pwd'];

$contact_num=$_POST['contact_num'];
$branch=$_POST['branch'];
$aclevel=$_POST['aclevel'];

$branchID=0;
if($branch=='Colombo'){$branchID=1;}
elseif($branch=='Rathnapura'){$branchID=2;}
elseif($branch=='Galle'){$branchID=3;}
elseif($branch=='Kalutara'){$branchID=4;}


$acl=0;
if($aclevel=='Branch_manager'){$acl=2;}
elseif($aclevel=='Cashier'){$acl=1;}
elseif($aclevel=='Meter_Reader'){$acl=3;}
echo $ID;
echo $email;
echo $name;
echo $pwd;
echo $branchID;
echo $acl;





$sql  = "INSERT INTO `employee`(`ID`, `branch_ID`, `name`,  `email`, `contact_No`) VALUES ('$ID','$branchID','$name','$email','$contact_num')";
//$result = mysqli_query($connection,$sql);
if ($connection->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record1: " . $connection->error;
}

$sql  = "INSERT INTO `employee_credentials`(`ID`, `password`,`access_Level`) VALUES ('$ID','$pwd','$acl')";
//$result = mysqli_query($connection,$sql);
//header("Location: ../../head_manager.php");
if ($connection->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record2: " . $connection->error;
}

?>