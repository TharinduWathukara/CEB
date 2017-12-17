<?php 
include 'db.connect.php';

$sql  = "SELECT * from customer where ID='12'";

$connection=$_SESSION["connection"] ;

$result = mysqli_query($connection,$sql);

if(mysqli_num_rows($result)>0){echo 'already inserted';}
else{echo 'not inserted';}



/*$index=0;
while($row = mysqli_fetch_assoc($result)){ // loop to store the data in an associative array.
     $yourArray[$index] = $row;
     $index++;
}

echo $resultArray['12'];
foreach($resultArray as $key => $value) {
  echo "$key is at $value";
}*/
    
/*if in_array('12',$resultArray){echo 'f'}*/

?>