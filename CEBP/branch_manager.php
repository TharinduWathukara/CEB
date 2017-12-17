<?php 
include 'other/php/db.connect.php';
        $connection=$_SESSION['connection'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/bootstrap.min.css">
  <link href="CSS/Fonts.css" rel="stylesheet" type="text/css">
  <link href="CSS/Fonts1.css" rel="stylesheet" type="text/css">
  <script src="CSS/jquery.min.js"></script>
  <script src="CSS/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  .alright{text-align: right;}
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 200px;
    }
  }
      
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">CONNECTION REQUESTS</a></li>
        <li><a href="#portfolio">ADD CUSTOMER</a></li>
        <li><a href="#pricing">BRANCH ENERGY CONSUMPTION</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <div class="container">
  <!-- Trigger the modal with a button -->
              <a href="other/php/logout.inc.php"><div class="alright"><button type="button" class="btn btn-danger" style="width:auto; padding: 14px 20px background-color:#f4511e; "id="myBtn">LOGOUT</button></div></a>

</div>
 



      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron" >
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators" >
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active" >
                <img src="image/ceb_wall1.jpg" style="width: 100%; height:400px" >
            </div>

            <div class="item">
                <img src="image/ceb_wall2.jpg" style="width: 100%; height:400px" >
            </div>

            <div class="item">
                <img src="image/ceb_wall3.jpg" style="width: 100%; height:400px" >
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


<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Company Page</h2><br>
      <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid ">
    <br>

    <h2 class="text-center">CONNECTION REQUESTS</h2>
     <table class="table">
    <thead>
      <tr>
        <th>ADDRESS</th>
        <th>NIC</th>
        <th>EMAIL</th>
         <th>DATE</th> 
      </tr>
    </thead>
    <tbody>
        <?php 
        
        $userID=$_SESSION["userID"];
        $sql  = "SELECT * FROM `employee` WHERE `ID`='$userID'";
        $result = mysqli_query($connection,$sql);
        $row=mysqli_fetch_assoc($result);
        $branch=$row['branch_ID'];
        $_SESSION['managers_branch']=$branch;
        
        $sql  = "SELECT * FROM `non_register_customer` WHERE `branch`='$branch'";
        $result = mysqli_query($connection,$sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            ?>
            <tr> <td>
            <?php echo $row["address"];?> 
            </td> <td>
            <?php echo $row["NIC"];?> 
            </td> <td>
            <?php echo $row["email"];?> 
            </td> <td>
            <?php echo $row["date_time"];?> 
                </td></tr>
    <?php	}
    } else {
        //echo "0 results";
        ?><td colspan="3">No Previous Usage</td><?php
    }
    ?>
<tr>
        </tr>

    </tbody>
  </table>
   
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>ADD CUSTOMER</h2><br>
  
  <form action="other/php/add_customer.php " method="POST"><div class="text-center"><div class="col-sm-10">
  	<div class="form-group">
      <label for="email">ID:</label>
      <input type="text" class="form-control" id="ID" placeholder="Enter ID" name="ID">
    </div><br>
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div><br>
    <div class="form-group">
      <label for="pwd">Temporary Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div><br>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="acc" placeholder="Enter email" name="email">
    </div><br>
     <div class="form-group">
      <label for="email">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
    </div><br>
    <div class="form-group">
      <label for="email">Account Number:</label>
      <input type="int" class="form-control" id="acc" placeholder="Enter Acc.No" name="acc">
    </div><br>
    <div class="form-group">
      <label for="email">Contact Number:</label>
      <input type="int" class="form-control" id="contact_num" placeholder="Enter Contact No" name="contact_num">
    </div><br>
     
      <div class="form-group">
  <label for="sel1">Select connection type:</label>
  <select class="form-control" id="con_typ" name="con_typ">
    <option>Domestic</option>
    <option>General</option>
    <option>Industrial</option>
    
  </select>
</div>
    <br><br>
      <button type="submit" class="btn btn-default">Submit</button></div></div>
  </form>
    <br>
  
 

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
    <h2 class="text-center">ENERGY CONSUMPTION</h2>
    <table class="table">
    <thead>
      <tr>
        <th>YEAR</th>
        <th>MONTH</th>
        <th>USED UNITS</th>
         
      </tr>
    </thead>
    <tbody>
        <?php
        $userID=$_SESSION["userID"];
        $sql  = "SELECT * FROM `employee` WHERE `ID`='$userID'";
        $result = mysqli_query($connection,$sql);
        $row = $result->fetch_assoc();
        $branch=$row['branch_ID'];
        //echo $branch;
        $sql_usage  = "SELECT `year`, `month`,  SUM(`no_Of_Units`)  as units FROM `used_unites` join customer on used_unites.customer_ID=customer.ID WHERE branch_ID='$branch' GROUP by `month`";
        $result_usage = mysqli_query($connection,$sql_usage);
        
        if ($result_usage->num_rows > 0) {
        // output data of each row
        while($row_usage = $result_usage->fetch_assoc()) {
            //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            ?>
            <tr> <td>
            <?php echo $row_usage["year"];?> 
            </td> <td>
            <?php echo $row_usage["month"];?> 
            </td> <td>
            <?php echo $row_usage["units"];?> 
            </td> <td></tr>
            
    <?php	}
    } else {
        //echo "0 results";
        ?><td colspan="3">No Previous Usage</td><?php
    }
    ?>
<tr>
        </tr>

    </tbody>
  </table>
  
   
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group" >
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit" >Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Add Google Maps -->
<div id="googleMap" style="height:400px;width:100%;"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
