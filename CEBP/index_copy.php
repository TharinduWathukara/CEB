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
      <a class="navbar-brand" href="#myPage">CEYLON ELECTRICITY BOARD</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT US</a></li>
        <li><a href="#services">OUR MANAGEMENT</a></li>
        <li><a href="#portfolio">CONTACT US</a></li>
        <li><a href="#contact">NEW CONNECTION</a></li>
        
        <div class="container">
  <!-- Trigger the modal with a button -->
            <div class="alright"><button type="button" class="btn btn-danger" style="width:auto; padding: 14px 20px background-color:#f4511e; "id="myBtn">LOGIN</button></div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action ='other/php/login.inc.php' method="POST">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> UserID</label>
              <input type="text" class="form-control" id="usrID" name="userID" placeholder="Enter userID">
            </div>
            <div class="form-group">
                <label for="usrname">Access type</label><br>
              <label class="radio-inline"><input type="radio" name="optradio" value="em" checked>Employee</label>
                <label class="radio-inline"><input type="radio" name="optradio" value="cu">Customer</label>
               
            </div>  
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" name="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>


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
        <br>
      <h2>ABOUT US</h2><br>
      <h4>Ceylon Electricity Board is a body corporate established on the 1st November 1969 under the Act of Parliament No. 17 of 1969. It is empowered to generate electrical energy, transmit the same and distribute it to reach all categories of consumers and to collect the revenue. It is also empowered to acquire assets, including human resources following the approved procedures. It is the duty of the CEB to make the optimal use of the resources through the application of pragmatic and time-tested managerial methods.</h4><br>
     <p style="text-align: justify;"><strong>What We Do ?</strong></p>
                <p style="text-align: justify;">Ceylon Electricity Board , A close scrutiny of the CEB’s mission would reveal that the functions of the CEB encompass major human, social and economic aspects. The availability, reliability and quality dimensions certainly highlight the degree to which we should orient our functions to delight the customer. These are also the major concerns of commercial and industrial customers of CEB, which provide job opportunities to our people and to contribute to the economic and thereby the social development of our people and of our country.</p>
                <p style="text-align: justify;">The environmental dimensions encompass a mandatory requirement that the activities of the CEB should be to provide a clean and a green atmosphere where healthy human existence could be guaranteed. The affordable criteria highlight two aspects.  In the first instance, the commodity of the CEB, namely the electrical energy, should be within the reach of our people who could make use of it to catalyze the development of the socio-economic process.</p>
                <p style="text-align: justify;">This brings us to the second aspect, which is a major challenge to all the employees in the CEB. Our planning process, implementation strategies, distribution methodologies and revenue collection action should be geared to provide electricity affordable to the customer and to see that all these processes respect the availability, reliability, quality and environmental criteria.</p>
                <p style="text-align: justify;">It is also important to realize that we should be able to generate sufficient cash to successfully provide the above processes and to have a reasonable internal cash generation to endeavor into future development needs.</p>
                <p style="text-align: justify;">Our Statutory Obligations<strong>Section 11: Ceylon Electricity Board Act No. 17 of 1969</strong>It shall be the duty of the Board, with effect from the date of the transfer to the Board of Government Electrical Undertakings under Section 18, to develop &#038; maintain an efficient, coordinated &#038; economical system of electricity supply for the whole of Sri Lanka.<strong>Section 38: Ceylon Electricity Board Act No. 17 of 1969</strong></p>
                <p style="text-align: justify;">It shall be the duty of the Board to exercise its powers and perform its Functions so as to secure that the revenues of the Board are sufficient to meet its total outgoing properly chargeable to revenue account including depreciation and interest on capital and to meet a reasonable proportion of the cost of the development of the services of the Board.</>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
       <br><br>
      <img src="other/image/aboutus1.jpeg" width="100%" style="margin-bottom: 20px"></span>
    </div>
  </div>
<div style="width: 99%; margin: 0 auto; background: whitesmoke; padding: 20px">
        <div style="width: 80%; margin: 0 auto;">
            <h2 style="text-align: center"><span style="color: darkslategray;"><strong>Mission</strong></span></h2>
            <h4><span style="color: darkslategray;"><strong>To develop and maintain an efficient, coordinated and economical system of electricity supply to the whole of Sri Lanka, while adhering to our core values</strong></span></h4>
            <ul style="padding-left: 15%">
                <li>
                    <h5><span style="color: darkslategray;"><strong>Quality</strong></span></h5>
                </li>
                <li>
                    <h5><span style="color: darkslategray;"><strong>Service to the nation</strong></span></h5>
                </li>
                <li>
                    <h5><span style="color: darkslategray;"><strong>Efficiency and effectiveness</strong></span></h5>
                </li>
                <li>
                    <h5><span style="color: darkslategray;"><strong>Commitment</strong></span></h5>
                </li>
                <li>
                    <h5><span style="color: darkslategray;"><strong>Safety</strong></span></h5>
                </li>
                <li>
                    <h5><span style="color: darkslategray;"><strong>Professionalism</strong></span></h5>
                </li>
                <li>
                    <h5><span style="color: darkslategray;"><strong>Sustainability</strong></span></h5>
                </li>
            </ul>
        </div>
    </div>   
    
</div>



<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
    <br>
  <h2>OUR MANAGEMENT</h2>
  <table class="table table-striped table-responsive" style="height: 1316px; border: 2px solid darkgray" width="415">
            <thead>
            <tr class="danger">
                <th>Designation</th>
                <th>Name</th>
                <th>Profession</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Chairman</td>
                <td>Mr. W. B. Ganegala</td>
                <td>Email &#8211; <span style="color: #0000ff;">chairmanceb@ceb.lk</span></td>
            </tr>
            <tr>
                <td>Vice Chairman</td>
                <td>Mr. W.A. Gamini Wanasekara</td>
                <td><span style="text-align: justify;">Management &#038; Legal Consultant Attorney-at-Law </span> Email &#8211; <span style="color: #0000ff;">vcceb@ceb.lk</span></td>
            </tr>
            <tr>
                <td>Working Director</td>
                <td>Mr. W.R.G. Sanath Bandara</td>
                <td><span style="text-align: justify;">Attorney-at-Law Notary Public &#038; Commissioner of Oaths</span> Email – <span style="color: #0000ff;">wdceb@ceb.lk</span></td>
            </tr>
            <tr>
                <td>Member</td>
                <td>Mr. T. D. S P. Perera</td>
                <td>Addl. Secretary (Industry Development), Ministry of Industry and Commerce</td>
            </tr>
            <tr>
                <td>Member</td>
                <td>Mr. S.D.A.B. Boralessa</td>
                <td><span style="text-align: justify;">Additional Secretary, Ministry of Provincial Councils &#038; Local Government</span></td>
            </tr>
            <tr>
                <td>Member</td>
                <td>Mr. R. Semasinghe</td>
                <td><span style="text-align: justify;">Director General, Department of Public Enterprises, Ministry of Finance</span></td>
            </tr>
            <tr>
                <td>Member</td>
                <td>Ms. K.P.D.J.G. Kariyawasam</td>
                <td><span style="text-align: justify;">Attorney-at-Law</span></td>
            </tr>
            </tbody>
            <thead>
            <tr class="danger">
                <th colspan="3">Corporate Management Team</th>
            </tr>
            <tr class="danger">
                <th>Designation</th>
                <th>Name</th>
                <th>Profession</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>General Manager</td>
                <td>Mr. A K.  Samarasinghe</td>
                <td>Chartered Engineer</p>
                    <p>Email &#8211;<span style="color: #0000ff;">gm@ceb.lk</span></td>
            </tr>
            <tr>
                <td>Additional General Manager (Generation)</td>
                <td>Mrs. D Tilakasena</td>
                <td>Chartered Engineer</p>
                    <p>Email &#8211;<span style="color: #0000ff;">agmgen@ceb.lk</span></td>
            </tr>
            <tr>
                <td>Additional General Manager (Transmission)</td>
                <td>Mr. P L G Kariyawasam</td>
                <td>Chartered Engineer</p>
                    <p>Email &#8211;<span style="color: #0000ff;">agmtr@ceb.lk</span></td>
            </tr>
            <tr>
                <td>Additional General Manager (Distribution Division 1)</td>
                <td>Mr. P C C Perera</td>
                <td>Chartered Engineer</p>
                    <p>Email &#8211; <span style="color: #0000ff;">agmdd1@ceb.lk</span></td>
            </tr>
            <tr>
                <td>Additional General Manager (Distribution Division 2)</td>
                <td>Mr. M A D N Gratien</td>
                <td>Chartered Engineer</p>
                    <p>Email &#8211; <span style="color: #0000ff;">agmdd2@ceb.lk</span></td>
            </tr>
            <tr>
                <td>Additional General Manager (Distribution Division 3)</td>
                <td>Mrs. A D Tillekeratne</td>
                <td>Chartered Engineer</p>
                    <p>Email &#8211; <span style="color: #0000ff;">agmdd3@ceb.lk</span></td>
            </tr>
            <tr>
                <td>Additional General Manager (Distribution Division 4)</td>
                <td>Mr. D D K Karunaratne</td>
                <td>Chartered Engineer</p>
                    <p>Email &#8211; <span style="color: #0000ff;">agmdd4@ceb.lk</span></td>
            </tr>
            <tr>
                <td>Additional General Manager</p>
                    <p>(Asset Management)</td>
                <td>Mr. G A Jayantha</td>
                <td>Chartered Engineer</p>
                    <p>Email &#8211; <span style="color: #0000ff;">agmam@ceb.lk</span></td>
            </tr>
            <tr>
                <td>Additional General Manager (Corporate Strategy)</td>
                <td>Mrs. N W K Herath</td>
                <td>Chartered Engineer</p>
                    <p>Email &#8211; <span style="color: #0000ff;">agmcs@ceb.lk</span></td>
            </tr>
            <tr>
                <td>Additional General Manager</p>
                    <p>(Projects)</td>
                <td>Mr. S D W  Gunawardena</td>
                <td>Chartered Engineer</p>
                    <p>Email &#8211; <span style="color: #0000ff;">agmpr@ceb.lk</span></td>
            </tr>
            <tr>
                <td>Finance Manager</td>
                <td>Mr. T K Liyanage</td>
                <td>Chartered Accountant</p>
                    <p>Email &#8211; <span style="color: #0000ff;">fm@ceb.lk</span></td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <td width="157"></td>
                <td width="108"></td>
                <td width="150"></td>
            </tr>
            </tbody>
        </table>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <br>
    <h2>CONTACT US</h2><br>
  <div class="row">
        
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
    <br><br><br><br><br>
</div>


<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
    <br>
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Ceylon Electricity Board</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> customer_care@ceb.lk</p>
    </div>
    <form action=other/php/send_request.php method="post">
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="NIC" name="NIC" placeholder="NIC" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
         <div class="col-sm-6 form-group">
          <input class="form-control" id="address" name="address" placeholder="Address" type="text" required>
        </div>
          <div class="col-sm-6 form-group">
          <input class="form-control" id="contact" name="contact" placeholder="Telephone" type="text" required>
        </div>
          <div class="col-sm-6 form-group">
  <label for="sel1">Select branch:</label>
  <select class="form-control" id="branch" name="branch">
    <option>Colombo</option>
    <option>Rathnapura</option>
    <option>Galle</option>
    <option>Kalutara</option>
  </select>
</div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
      </form>
  </div>
</div>

<!-- Container (Contact Section) -->

<!-- Add Google Maps -->

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
