<?php
/**
 * Created by PhpStorm.
 * User: Tharindu
 * Date: 27/10/2017
 * Time: 7:34 PM
 */

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "ceb";

$connection = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

session_start();




$_SESSION["connection"] = $connection;

if(!$connection){
    die('Connection failed:'.mysqli_connect_error());
}