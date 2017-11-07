<?php
/**
 * Created by PhpStorm.
 * User: tharindu
 * Date: 10/29/17
 * Time: 3:27 AM
 */
session_start();

if(!isset($_SESSION["userID"])){header('Location: index.php');}

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
                                    <small>IOSDSV <span class="caret"></span></small>
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
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#toggleDemo1" data-parent="#sidenav01" class="collapsed">
                                <span class="glyphicon glyphicon-user"></span> User Management <span class="caret pull-right"></span>
                            </a>
                            <div class="collapse" id="toggleDemo1" style="height: 0px;">
                                <ul class="nav nav-list">
                                    <li><a href="#">Add New Employee</a></li>
                                    <li><a href="#">Edit Employee Details</a></li>
                                    <li><a href="#">Add new Customer</a></li>
                                    <li><a href="#">Edit Customer Details</a></li>
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
                        <li><a href=""><span class="glyphicon glyphicon-cog"></span> System Setting</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <div class="col-sm-9 col-md-10 affix-content">
        <div class="container">

<!--            what you want to add.. add here-->


        </div>
    </div>
</div>

<?php
include_once "footer.php";
?>

</body>
<script type="text/javascript" src="other/javascript/jquery-3.2.1.min.js"></script>
<script src="other/bootstrap/js/bootstrap.min.js"></script>
<html>

