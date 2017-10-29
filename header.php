<?php
/**
 * Created by PhpStorm.
 * User: tharindu
 * Date: 10/29/17
 * Time: 3:27 AM
 */
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CEB</title>
    <link rel="stylesheet" href="other/bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="other/cs/indexStyle.css">
</head>
<body>
<nav class="navbar navbar-default" id="navigationbar">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="other/image/logo.png" width="50px">
            <img src="other/image/Ceylon-Electricity-Board.png" style="width:170px">
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active" style="padding-left: 15px"><a href="index.php">HOME <span class="sr-only">(current)</span></a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">CAREERS</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="#">SITE MAP</a></li>
                <li><form>
                        <table>
                            <tr>
                                <td><input type="text" style="width:300px; margin-top: 8px; margin-left: 30px" id="search_input"></td>
                                <td><input type="submit" style="width:80px; margin-top: 5px; margin-left: 10px; padding: 3px;" id="search_submit"></td>
                            </tr>
                        </table></form></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                    if(isset($_SESSION['userID'])){
                        echo '<form action="other/php/logout.inc.php" method="POST">
							<button type="submit" name="submit" style="width:auto; padding: 14px 20px;">Logout</button>
						</form>';
                    }else{
                        echo'<li>
                                <button onclick="document.getElementById(\'id01\').style.display=\'block\'" style="width:auto; padding: 14px 20px;" id="login">LOGIN</button>
            
                                <div id="id01" class="modal">
            
                                    <form class="modal-content animate" id="login_form" action="other/php/login.inc.php" method="post">
                                        <div class="imgcontainer">
                                            <span onclick="document.getElementById(\'id01\').style.display=\'none\'" class="close" title="Close Modal">&times;</span>
                                            <img src="other/image/logo.png" alt="Avatar" class="avatar">
                                            <h2 style="color: gold; font-weight: bold;font-size: 30px;">CENTRAL ELECTRICITY BOARDL</h2>
                                        </div>
            
                                        <div class="container">
                                            <label><b>User ID</b></label><br>
                                            <input type="text" placeholder="User ID" name="userID" id="userID" required><br>
            
                                            <label><b>Password</b></label><br>
                                            <input type="password" placeholder="Password" name="psw" id="psw" required><br>
            
                                            <button type="submit" id="submit" name="submit">Login</button><br>
                                            <input type="checkbox" checked="checked"> Remember me
                                        </div>
            
                                        <div class="container" style="background-color:#f1f1f1">
                                            <button type="button" onclick="document.getElementById(\'id01\').style.display=\'none\'" class="cancelbtn">Cancel</button>
                                            <span class="psw">Forgot <a href="#">password?</a></span>
                                        </div>
                                    </form>
                                </div>
                            </li>';
                    }
                ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
