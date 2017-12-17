<?php
/**
 * Created by PhpStorm.
 * User: tharindu
 * Date: 12/17/17
 * Time: 9:03 AM
 */

session_start();

if(!isset($_SESSION["userID"])){header('Location: index.php');}
require 'other/php/db.connect.php';
$editEmployeeOutput='';

if(isset($_POST['editEmployeeSearch'])){
    $searching = $_POST['name'];
    $searching = preg_replace("#[^0-9a-z]#","",$searching);

    $sql = "select * from Employee where name like '%$searching%'";
    $result = mysqli_query($connection,$sql);
    $count = mysqli_num_rows($result);
    if($count==0){
        $editEmployeeOutput = "There are no Search Results!";
    }else{
        while($row=mysqli_fetch_array($result)){
            $ID = $row['ID'];
            $name = $row['name'];
            $email = $row['email'];
            $branchID=$row['branch_ID'];

            $sql2="select name from Branch where ID='$branchID'";
            $result2=mysqli_query($connection,$sql2);
            $row2=mysqli_fetch_assoc($result2);

            $branchName = $row2['name'];

            $editEmployeeOutput .= "
                        <div class=\"row\">
                            <div class=\"col-sm-1\">
                                ".$ID."
                            </div>
                            <div class=\"col-sm-3\">
                                ".$name."
                            </div>
                            <div class=\"col-sm-5\">
                                ".$email."
                            </div>
                            <div class=\"col-sm-3\">
                                ".$branchName."
                            </div>
                        </div>";
        }
    }
//    echo "<script type='text/javascript'>$('#editEmployeeDetails').show()</script>";
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

            <!--            edit employee details-->

            <div id="editEmployeeDetails" class="formElements" style="margin: 0 auto; width: 58%; border: 2px solid black; padding: 30px;">
                <div class="form-area">
                    <form role="form" action="editEmployeeDetails.php" method="post">
                        <br style="clear:both">
                        <h3 style="margin-bottom: 25px; text-align: center;">VIEW EMPLOYEE DETAILS</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="submit" id="submit" name="editEmployeeSearch" class="btn btn-primary" style="width: 90%">Search Employee</button>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" style="width: 90%" onclick="document.getElementById('editEmployeeDetails').style.display='none'" class="btn btn-primary ">Cancel</button>
                            </div>
                        </div><br><hr>
                        <div class="row">
                            <div class="col-sm-1">
                                <strong>ID</strong>
                            </div>
                            <div class="col-sm-3">
                                <strong>Name</strong>
                            </div>
                            <div class="col-sm-5">
                                <strong>Email</strong>
                            </div>
                            <div class="col-sm-3">
                                <strong>Branch</strong>
                            </div>
                        </div>
                        <?php
                        print("$editEmployeeOutput");
                        ?>
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

