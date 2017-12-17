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
$sql = $connection->prepare("select * from Employee_Credentials where ID=? and password=? ");
    
$sql->bind_param("ss", $userID,$psw);
   $sql->execute(); 
    $result=$sql->get_result();
//$result = mysqli_query($connection,$sql);


$_SESSION["userID"] = $userID;
$_SESSION["connection"] =$connection;

if(!$row=mysqli_fetch_assoc($result)){
    echo "<script>
		alert('Your UserID,password combination is incorrect,Please check');
		window.location.href='../../index_copy.php';
		</script>";
        
		exit;
    
    
}else{
    $acl=0;
   $sql1 = "select * from manager  where ID='$userID' "; 
    $sql2 = "select * from cashier  where ID='$userID'" ; 
   $sql3 = "select * from meter_reader  where ID='$userID'" ; 
   $sql4 = "select * from head_manager  where ID='$userID'" ; 
    
    $result1 = mysqli_query($connection,$sql1);
    $result2= mysqli_query($connection,$sql2);
    $result3= mysqli_query($connection,$sql3);
    $result4= mysqli_query($connection,$sql4);
    
    if(mysqli_fetch_assoc($result1)){
        $acl=2;
    }
    elseif(mysqli_fetch_assoc($result2)){
        $acl=1;
    }
    elseif(mysqli_fetch_assoc($result3)){
        $acl=3;
    }
    elseif(mysqli_fetch_assoc($result4)){
        $acl=4;
    }
    //$acl=$row['access_Level'];
    if($acl==1){header("Location: ../../cashier.php");}
    elseif($acl==2){header("Location: ../../branch_manager.php");}
    elseif($acl==3){header("Location: ../../meter_reader.php");}
    elseif($acl==4){header("Location: ../../head_manager.php");}

    //header("Location: ../../cashier.php");
    
}
}
elseif($ac=='cu'){
    /*
    $sql = $connection->prepare("select * from Employee_Credentials where ID=? and password=? ");
    
$sql->bind_param("ss", $userID,$psw);
   $sql->execute(); 
    $result=$sql->get_result();
    */
    
    $sql =  $connection->prepare("select * from customer_Credentials where ID=? and password=?");
    $sql->bind_param("ss", $userID,$psw);
   $sql->execute(); 
    $result=$sql->get_result();
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
