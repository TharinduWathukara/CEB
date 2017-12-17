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
$userID=$_POST['userID'];
$psw=$_POST['psw'];
$ac=$_POST['optradio'];

if($ac=='em'){
$sql = "select * from Employee_Credentials where ID='$userID' and password='$psw'";
$result = mysqli_query($connection,$sql);


$_SESSION["userID"] = $userID;
$_SESSION["connection"] =$connection;

if(!$row=mysqli_fetch_assoc($result)){
    echo "<script>
		alert('Your UserID,password combination is incorrect,Please check');
		window.location.href='../../index_copy.php';
		</script>";
        
		exit;
    
    
}else{
    $acl=$row['access_Level'];
    if($acl==1){header("Location: ../../cashier.php");}
    elseif($acl==2){header("Location: ../../branch_manager.php");}
    elseif($acl==3){header("Location: ../../meter_reader.php");}
    elseif($acl==5){header("Location: ../../head_manager.php");}

    //header("Location: ../../cashier.php");
    
}
}
elseif($ac=='cu'){
    
    $sql = "select * from customer_Credentials where ID='$userID' and password='$psw'";
    $result = mysqli_query($connection,$sql);
    $_SESSION["userID"] = $userID;
    $_SESSION["connection"] =$connection;
    
    if(!$row=mysqli_fetch_assoc($result)){
    echo "<script>
		alert('Your UserID,password combination is incorrect,Please check');
		window.location.href='../../index_copy.php';
		</script>";
        
		exit;
    }
    else{header("Location: ../../customer.php");}
    
    
}else{
    
    echo 'error';
    
}
    
    
    

?>
