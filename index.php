<?php
/**
 * Created by PhpStorm.
 * User: tharindu
 * Date: 10/28/17
 * Time: 1:38 PM
 */

include_once 'header.php';
?>

<div class="jumbotron">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="other/image/ceb_wall1.jpg" style="width: 100%; height:350px">
            </div>

            <div class="item">
                <img src="other/image/ceb_wall2.jpg" style="width: 100%; height:350px">
            </div>

            <div class="item">
                <img src="other/image/ceb_wall3.jpg" style="width: 100%; height:350px">
            </div>
        </div>

        <!--Left and right controls-->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<script type="text/javascript" src="other/javascript/jquery-3.2.1.min.js"></script>
<script src="other/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="other/javascript/indexScript.js"></script>

<?php

require_once "footer.php";

?>