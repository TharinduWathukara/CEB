<?php
/**
 * Created by PhpStorm.
 * User: tharindu
 * Date: 10/29/17
 * Time: 3:27 AM
 */
session_start();

if(!isset($_SESSION["userID"])){header('Location: index.php');}
require 'other/php/db.connect.php';

if(isset($_POST['addEmployeeSubmit'])){
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
            $sql2="select ID from Employee where name='$name' and email='$email' and contact_No='$mobile'";
            $result2 = mysqli_query($connection,$sql2);

            if($row2=mysqli_fetch_assoc($result2)){
                $id=$row2['ID'];

                $sql3="insert into Employee_Credentials VALUE ('$id',aes_encrypt('$password','tharindu'),'$position')";
                if (mysqli_query($connection, $sql3)) {
                    if($position=='manager'){
                        $sql4="insert into Manager VALUE ('$id')";
                        if (mysqli_query($connection, $sql4)) {
                            echo "<script type='text/javascript'> alert('New record created successfully');</script>";
                        } else {
                            echo "Error: " . $sql4 . "<br>" . mysqli_error($connection);
                        }
                    }if ($position=="cashier"){
                        $sql5="insert into Cashier VALUE ('$id')";
                        if (mysqli_query($connection, $sql5)) {
                            echo "<script type='text/javascript'> alert('New record created successfully');</script>";
                        } else {
                            echo "Error: " . $sql5 . "<br>" . mysqli_error($connection);
                        }
                    }if ($position=="meterReader"){
                        $serviceArea= $_POST['serviceArea'];
                        $sql6="insert into Meter_Reader VALUE ('$id','$serviceArea')";
                        if (mysqli_query($connection, $sql6)) {
                            echo "<script type='text/javascript'> alert('New record created successfully');</script>";
                        } else {
                            echo "Error: " . $sql6 . "<br>" . mysqli_error($connection);
                        }
                    }
                } else {
                    echo "added to the employee credentials";
                    echo "Error: " . $sql3 . "<br>" . mysqli_error($connection);
                }
            }
            else{
                echo "id not get";
            }
        }else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        }
    }else{
        echo "<script type='text/javascript'> alert('Check password again');</script>";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CEB</title>
    <link rel="stylesheet" href="other/bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="other/cs/homeStyle.css">
    <link rel="stylesheet" href="other/cs/headerStyle.css">
</head>
<body>


<?php
include_once 'header.php';
?>

<div class="row affix-row" style="margin-top: 54px">
    <div class="col-sm-3 col-md-2 affix-sidebar">
        <div class="sidebar-nav">
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="visible-xs navbar-brand">Sidebar menu</span>
                </div>
                <div class="navbar-collapse collapse sidebar-navbar-collapse">
                    <ul class="nav navbar-nav" id="sidenav01">
                        <li class="active">
                            <a href="#" data-toggle="collapse" data-target="#toggleDemo0" data-parent="#sidenav01" class="collapsed">
                                <h4>
                                    Control Panel
                                    <br>
                                    <small>Name <span class="caret"></span></small>
                                </h4>
                            </a>
                            <div class="collapse" id="toggleDemo0" style="height: 0px;">
                                <ul class="nav nav-list">
                                    <li><a href="#">ProfileSubMenu1</a></li>
                                    <li><a href="#">ProfileSubMenu2</a></li>
                                    <li><a href="#">ProfileSubMenu3</a></li>
                                </ul>
                            </div>
                        </li>
                        <?php
                        if($_SESSION['access_Level']=="manager"){
                            echo('<li>
                            <a data-toggle="collapse" data-target="#toggleDemo1" data-parent="#sidenav01" class="collapsed">
                                <span class="glyphicon glyphicon-user"></span> User Management <span class="caret pull-right"></span>
                            </a>
                            <div class="collapse" id="toggleDemo1" style="height: 0px;">
                                <ul class="nav nav-list">
                                    <li id="addEmployeeMenu" style="cursor: pointer;"><a href="addEmployee.php">Add New Employee</a></li>
                                    <li id="editEmployeeDetailsMenu"style="cursor: pointer;"><a href="editEmployeeDetails.php" >View Employee Details</a></li>
                                    <li id="addCustomerMenu" style="cursor: pointer;"><a href="addCustomer.php">Add new Customer</a></li>
                                    <li id="editCustomerDetailsMenu" style="cursor: pointer;"><a href="editCutomerDetails.php">View Customer Details</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
                                <span class="glyphicon glyphicon-fire"></span> Monitor Energy Consumption<span class="caret pull-right"></span>
                            </a>
                            <div class="collapse" id="toggleDemo2" style="height: 0px;">
                                <ul class="nav nav-list">
                                    <li><a href="#">Overall Energy Consumption</a></li>
                                    <li><a href="#">Energy Consumption by Customer</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a data-toggle="collapse" data-target="#toggleDemo3" data-parent="#sidenav01" class="collapsed">
                                <span class="glyphicon glyphicon-inbox"></span> Manage Bill Payments<span class="caret pull-right"></span>
                            </a>
                            <div class="collapse" id="toggleDemo3" style="height: 0px;">
                                <ul class="nav nav-list">
                                    <li><a href="viewBillPayments.php">View Bill Payments</a></li>
                                    <li><a href="#">Payments</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#"><span class="glyphicon glyphicon-pencil"></span> Meter Reading</a></li>
                        <li><a href=""><span class="glyphicon glyphicon-cog"></span> System Setting</a></li>');
                        }

                        elseif ($_SESSION['access_Level']=="cashier"){
                            echo ('
                        <li>
                            <a data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
                                <span class="glyphicon glyphicon-fire"></span> Monitor Energy Consumption<span class="caret pull-right"></span>
                            </a>
                            <div class="collapse" id="toggleDemo2" style="height: 0px;">
                                <ul class="nav nav-list">
                                    <li><a href="#">Energy Consumption by Customer</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a data-toggle="collapse" data-target="#toggleDemo3" data-parent="#sidenav01" class="collapsed">
                                <span class="glyphicon glyphicon-inbox"></span> Manage Bill Payments<span class="caret pull-right"></span>
                            </a>
                            <div class="collapse" id="toggleDemo3" style="height: 0px;">
                                <ul class="nav nav-list">
                                    <li><a href="viewBillPayments.php">View Bill Payments</a></li>
                                    <li><a href="#">Payments</a></li>
                                </ul>
                            </div>
                        </li>
                        ');
                        }

                        elseif ($_SESSION['access_Level']=='meterReader'){
                            echo('<li><a href="#"><span class="glyphicon glyphicon-pencil"></span> Meter Reading</a></li>');
                        }
                        ?>


                        <!--<li>
                            <a href="#" data-toggle="collapse" data-target="#toggleDemo1" data-parent="#sidenav01" class="collapsed">
                                <span class="glyphicon glyphicon-user"></span> User Management <span class="caret pull-right"></span>
                            </a>
                            <div class="collapse" id="toggleDemo1" style="height: 0px;">
                                <ul class="nav nav-list">
                                    <li id="addEmployeeMenu" onclick="$('.formElements').hide(); $('#addEmployee').show()" style="cursor: pointer;"><a>Add New Employee</a></li>
                                    <li id="editEmployeeDetailsMenu" style="cursor: pointer;"><a>Edit Employee Details</a></li>
                                    <li id="addCustomerMenu" onclick="$('.formElements').hide(); $('#addCustomer').show()" style="cursor: pointer;"><a>Add new Customer</a></li>
                                    <li id="editCustomerDetailsMenu" style="cursor: pointer;"><a>Edit Customer Details</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
                                <span class="glyphicon glyphicon-fire"></span> Monitor Energy Consumption<span class="caret pull-right"></span>
                            </a>
                            <div class="collapse" id="toggleDemo2" style="height: 0px;">
                                <ul class="nav nav-list">
                                    <li><a href="#">Overall Energy Consumption</a></li>
                                    <li><a href="#">Energy Consumption by Customer</a></li>
                                    <li><a href="#">Submenu1.3</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#toggleDemo3" data-parent="#sidenav01" class="collapsed">
                                <span class="glyphicon glyphicon-inbox"></span> Manage Bill Payments<span class="caret pull-right"></span>
                            </a>
                            <div class="collapse" id="toggleDemo3" style="height: 0px;">
                                <ul class="nav nav-list">
                                    <li><a href="#">View Bill Payments</a></li>
                                    <li><a href="#">Payments</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#"><span class="glyphicon glyphicon-pencil"></span> Meter Reading</a></li>
                        <li><a href=""><span class="glyphicon glyphicon-cog"></span> System Setting</a></li>-->


                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <div class="col-sm-9 col-md-10 affix-content">
        <div class="container">

            <!--            add new employee-->

            <div id="addEmployee" class="formElements" style="margin: 0 auto; width: 58%; border: 2px solid black; padding: 30px;">
                <div class="form-area">
                    <form role="form" action="addEmployee.php" method="post">
                        <br style="clear:both">
                        <h3 style="margin-bottom: 25px; text-align: center;">ADD NEW EMPLOYEE</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="mobile" placeholder="Mobile Number" required>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="branch" style="width: 55%;">
                                <option selected>Choose Branch...</option>
                                <option value="1">Ratnapura</option>
                                <option value="2">Panadura</option>
                                <option value="3">Awissawella</option>
                                <option value="4">Kottawa</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="form-group" style="padding-left: 16px"><strong>Designation :</strong></div>
                            <div class="form-check form-check-inline col-sm-4">
                                <label>
                                    <input onclick="document.getElementById('form_serviceArea').style.display='none'" class="form-check-input" type="radio" name="position" value="manager"> Manager
                                </label>
                            </div>
                            <div class="form-check form-check-inline col-sm-4">
                                <label>
                                    <input onclick="document.getElementById('form_serviceArea').style.display='none'" class="form-check-input" type="radio" name="position" value="cashier"> Cashier
                                </label>
                            </div>
                            <div class="form-check form-check-inline col-sm-4">
                                <label>
                                    <input onclick="document.getElementById('form_serviceArea').style.display='block'" class="form-check-input" type="radio" name="position" value="meterReader"> Meter Reader
                                </label>
                            </div>
                        </div><br>
                        <div class="form-group" id="form_serviceArea" style="display:none;">
                            <input type="text" class="form-control" name="serviceArea" placeholder="Service Area">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Temporary Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" required>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <button type="submit" id="submit" name="addEmployeeSubmit" class="btn btn-primary" style="width: 90%">Add</button>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" style="width: 90%" onclick="document.getElementById('addEmployee').style.display='none'" class="btn btn-primary ">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
include_once "footer.php";
?>

</body>
<script type="text/javascript" src="other/javascript/jquery-3.2.1.min.js"></script>
<script src="other/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="other/javascript/homeScript.js"></script>
==
</html>

