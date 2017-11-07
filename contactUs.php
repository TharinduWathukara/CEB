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
    <link rel="stylesheet" href="other/cs/headerStyle.css">
</head>
<body>

<?php
include_once 'header.php';
include_once 'jumbotron.php';
?>
<div id="contact" style="background: lavenderblush; margin-top: 40px">
    <div class="row">
        <h2 style="padding-left: 50px;padding-top: 40px">Contact Us</h2>
        <div class="col-sm-5">
            <div style="width: 90%;margin: 0 auto; padding: 10px;">
                <div style="background: whitesmoke; padding: 20px;">
                    <iframe src="https://www.google.com/maps/d/embed?mid=ziiMbDbsaB2s.koinEfFSUiZU" style="width: 100%; min-height: 580px;"></iframe>
                </div>
            </div>
        </div>
        <div class="col-sm-7">
            <div style="margin: 0 auto; padding: 10px;">
                <div style="background: whitesmoke; padding: 20px;">
                    <table class="table table-striped table-responsive" border="1" style="width=100%; margin: 0 auto">
                        <tbody>
                        <tr>
                            <td width="250"><span style="color: #800000;"><strong>Office</strong></span></td>
                            <td width="130"><span style="color: #800000;"><strong>Telephone No.</strong></span></td>
                        </tr>
                        <tr>
                            <td width="250">Call Center</td>
                            <td width="130">1987</td>
                        </tr>
                        <tr>
                            <td width="250">General Numbers</td>
                            <td width="130">0112 324 471</td>
                        </tr>
                        <tr>
                            <td width="250"><span style="color: #333399;">Chairman&#8217;s Office</span></td>
                            <td width="130"><span style="color: #333399;">0112 329 108</span></td>
                        </tr>
                        <tr>
                            <td width="250"><span style="color: #333399;">General Manager&#8217;s Office</span></td>
                            <td width="130"><span style="color: #333399;">0112 320 953</span></td>
                        </tr>
                        <tr>
                            <td width="250">Distribution Division 1</td>
                            <td width="130">0112 335 922</td>
                        </tr>
                        <tr>
                            <td width="250">Distribution Division 2</td>
                            <td width="130">0112 431 598</td>
                        </tr>
                        <tr>
                            <td width="250"><span style="color: #333399;">Transmission Division</span></td>
                            <td width="130"><span style="color: #333399;">0112 395 735</span></td>
                        </tr>
                        <tr>
                            <td width="250"><span style="color: #333399;">Corporate Strategy Division</span></td>
                            <td width="130"><span style="color: #333399;">0112 333 068</span></td>
                        </tr>
                        <tr>
                            <td width="250">Asset Management Division</td>
                            <td width="130">0112 329 904</td>
                        </tr>
                        <tr>
                            <td width="250">Finance Division</td>
                            <td width="130">0112 329 863</td>
                        </tr>
                        <tr>
                            <td width="250"><span style="color: #333399;">Personnel Branch</span></td>
                            <td width="130"><span style="color: #333399;">0112 324 478</span></td>
                        </tr>
                        <tr>
                            <td width="250"><span style="color: #333399;">Special Investigation Branch</span></td>
                            <td width="130"><span style="color: #333399;">0112 422 259</span></td>
                        </tr>
                        <tr>
                            <td width="250">Statistical Unit</td>
                            <td width="130">0112 432 388</td>
                        </tr>
                        <tr>
                            <td width="250">Government Audit Unit</td>
                            <td width="130">011 281 5092</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once "footer.php";
?>

</body>
<script type="text/javascript" src="other/javascript/jquery-3.2.1.min.js"></script>
<script src="other/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="other/javascript/indexScript.js"></script>
</html>
