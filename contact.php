
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta tag start-->
	<meta charset="UTF-8" />
	<meta name="author" content="" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="theme-color" content="#58595B" />
	<meta name="msapplication-navbutton-color" content="#58595B" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#58595B" />
	<!-- Meta tag end-->
	<title>Home | Auto Durga Industries</title>
	<!-- Favicon start -->
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<!-- Favicon end -->
	<!-- CSS and Bootstrap 4 links start -->
	<link rel="stylesheet" type="text/css" href="css/plugins-css.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/index.css" />
	<link rel="stylesheet" type="text/css" href="style.css" />

	<!-- CSS and Bootstrap 4 links end -->
</head>

<body>
    <div class="navigation-wrap bg-light start-header start-style" style="background:orange !important">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">
				<a class="" href="index.php" style="color:black">
    <center><img src="img/logo.png" style="height:30px;width:30px" width="30" height="30" alt=""></center>Durga Auto Industries
  </a>						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto py-4 py-md-0">
								
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="index.php">Home</a>
								</li>
							
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Products</a>
									<div class="dropdown-menu">
							 <?php
include'admin/db.php';
// Create connection
$conn100 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn100->connect_error) {
  die("Connection failed: " . $conn100->connect_error);
}

$sql100 = "SELECT * FROM category";
$result100 = $conn100->query($sql100);

if ($result100->num_rows > 0) {
  // output data of each row
  while($row100 = $result100->fetch_assoc()) {
  echo"
  										<a class='dropdown-item' href='products.php?id=$row100[id]&&category=$row100[name]'>$row100[name]</a>
		
";

  		}
} else {
  echo "0 results";
}
$conn100->close();
?>

					   
							

									</div>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="about.php">About Us</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="contact.php">Contact Us</a>
								</li>
								
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Search</a>
									<div class="dropdown-menu">
							<form  action="result.php">
							    <input name="name" type="text">
							    <input type="submit" name="submit" value="search">
							</form>
							</ul>
						</div>
						
					</nav>		
				</div>
			</div>
		</div>
	</div>
     
<br><BR><BR><BR>


	<!-- Header end -->
	<!-- Breadcrumb start -->
	<nav aria-label="breadcrumb">
		<div class="container">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Contact</li>
			</ol>
		</div>
	</nav>
	<!-- Breadcrumb end -->
	<!-- Content start -->
	<div id="content">
		<!-- Modal start -->
		<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<button type="button" id="btn-closeModal" class="close" data-dismiss="modal" aria-label="Close" title="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<div class="form-div">
							<form action="">
								<h1 class="d-flex justify-content-center">Please login</h1>
								<div class="form-group d-flex justify-content-center username">
									<input type="text" id="username" class="form-control border-0" name="username" required />
									<span class="floating-label">Email/username</span>
								</div>
								<div class="form-group d-flex justify-content-center password">
									<input type="password" id="password" class="form-control border-0" name="password" required />
									<span class="floating-label">Password</span>
								</div>
								<label class="form-check-label">
									<input type="checkbox" class="form-check-input m-0" value="" onclick="myFunction()" />
									<span class="checkbox-span"></span>
									Show Password
								</label>
								<div class="d-flex justify-content-center">
									<button type="submit" id="btn-login" class="btn btn-primary">Login</button>
								</div>
								<label class="form-check-label">
							<input type="checkbox" class="form-check-input m-0" value="" />
								<span class="checkbox-span"></span>
								Remember me
							</label>
								<div class="d-flex justify-content-center text-center forgotPasword">
									<a href="javascript:void(0)">Forgot your password?</a>
								</div>
							</form>
							<div class="d-flex justify-content-center">
								<button id="btn-create" class="btn btn-success" onclick="window.location.href='registration.html'">Create an account</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal end -->
		<div class="container">
			<!-- Cart start -->
			<div id="cart">
				<div class="item-inCart">
					<div class="row align-items-center p-4">
						<div id="item" class="col-lg-8">
							<div class="row align-items-center">
								<div class="col-lg-5 text-center">
									<img src="img/items/oil-4.png" alt="img/items/oil-4.png" />
									<p class="name"><b>Wearever</b> Unloaded Caliper - Domestic</p>
									<span class="fas fa-star checked"></span>
									<span class="fas fa-star checked"></span>
									<span class="fas fa-star checked"></span>
									<span class="fas fa-star checked"></span>
									<span class="fas fa-star checked"></span>
									<div class="review">(154 reviews) | #18-B4728</div>
								</div>
								<div class="col-lg-4 add-toCart text-center">
									<p class="text-uppercase font-weight-bold text-success"><img src="img/icon/check.png" class="icon" alt="img/icon/check.png" />Added to Cart</p>
									<p class="text-uppercase font-weight-bold">Card subtotal <span class="font-weight-normal">1 (items)</span></p>
								</div>
								<div class="col-lg-3 text-center price">
									<p class="text-uppercase font-weight-bold text-danger">$63.99</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="row align-items-center">
								<div class="col-3 text-right col-sm-2 text-sm-center text-md-right col-lg-4">
									<button id="btn-removeItem" class="btn btn-danger text-uppercase font-weight-bold" title="Remove item" type="button">&times;</button>
								</div>
								<div class="col-9 col-sm-6 offset-sm-2 col-md-6 offset-lg-0 col-lg-8 text-center">
									<button id="btn-checkout" class="btn btn-primary text-uppercase font-weight-bold" onclick="window.location.href='cart.html'">Proceed to checkout</button>
								</div>
							</div>
						</div>
					</div>
					<button id="btn-closeCart" class="btn" title="Close" type="button">&times;</button>
				</div>
			</div>
			<!-- Cart end -->
			<!-- Dropdown start -->
			<div id="dropdown-hover" class="d-none d-md-block">
				<div class="row no-gutters">
					<div class="col-md-8">
						<h3>Most Popular Categories</h3>
						<div class="row no-gutters">
							<div class="col-md-6">
								<h6>Brake Systems</h6>
								<ul>
									<li><a>Brake Booster</a></li>
									<li><a>Brake kits</a></li>
									<li><a>Vacuum Pump</a></li>
									<li><a class="see-more">See more <i class="fas fa-angle-right"></i></a></li>
								</ul>
								<h6>Sensors</h6>
								<ul>
									<li><a>Camshaft Position</a></li>
									<li><a>Sensor, Crankshaft Pulse</a></li>
									<li><a>Vacuum Pump</a></li>
									<li><a class="see-more">See more <i class="fas fa-angle-right"></i></a></li>
								</ul>
								<h6>Filters</h6>
								<ul>
									<li><a>Air Dryer</a></li>
									<li><a>Air Filter</a></li>
									<li><a>Fuel Filter</a></li>
									<li><a class="see-more">See more <i class="fas fa-angle-right"></i></a></li>
								</ul>
							</div>
							<div class="col-md-6 second">
								<h6>Engine Parts</h6>
								<ul>
									<li><a>Engine Electrics</a></li>
									<li><a>Fuel Supply System</a></li>
									<li><a>Engine Air Supply</a></li>
									<li><a class="see-more">See more <i class="fas fa-angle-right"></i></a></li>
								</ul>
								<h6>Cooling Systems</h6>
								<ul>
									<li><a>Radiator</a></li>
									<li><a>Radiator Fan</a></li>
									<li><a>Thermostat</a></li>
									<li><a class="see-more">See more <i class="fas fa-angle-right"></i></a></li>
								</ul>
								<h6>Wheel Bearings</h6>
								<ul>
									<li><a>Nut</a></li>
									<li><a>Seal</a></li>
									<li><a>Split</a></li>
									<li><a class="see-more">See more <i class="fas fa-angle-right"></i></a></li>
								</ul>
							</div>
							<div class="col-10">
								<div class="row no-gutters align-items-center offer">
									<div class="col-md-7">
										<h5 class="text-uppercase m-0">Let us test your starting & charging systems for free.</h5>
									</div>
									<div class="col-md-5">
										<img src="img/offer.png" alt="img/offer.png" />
										<button id="btn-learn" class="btn btn-warning text-uppercase" type="button">Learn more<i class="fas fa-caret-right ml-2"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 all-categories">
						<h4>All Categories</h4>
						<ul>
							<li><a>Air Conditioning or Heater</a></li>
							<li><a>Bearings</a></li>
							<li><a>Belt Tensioner Kits</a></li>
							<li><a>Body</a></li>
							<li><a>Brake Systems</a></li>
							<li><a>Clutch/-Mounting Parts</a></li>
							<li><a>Cooling Systems</a></li>
							<li><a>Electrics Systems</a></li>
							<li><a>Engine Parts</a></li>
							<li><a>Exhaust Systems</a></li>
							<li><a>Filters</a></li>
							<li><a>Interior Equipment</a></li>
							<li><a>Other Parts</a></li>
							<li><a>Rubber-Metal Parts</a></li>
							<li><a>Sensors</a></li>
							<li><a>Special Tools</a></li>
							<li><a>Steering and Suspension Parts</a></li>
							<li><a>Suspension Damping</a></li>
							<li><a>Timing Chain and Accessories</a></li>
							<li><a>Wheel Bearings</a></li>
							<li><a>Wheel Hubs / Axle Journals</a></li>
							<li><a>Window Cleaning</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Dropdown end -->
			<!-- Contact start -->
			<div id="contact">
				<div class="row">
					<div class="col-lg-6">
					    
						<div class="row">
							<div class="col-sm-6">
								<h5 class="mb-1"><img src="img/icon/name.png" class="icon" alt="img/icon/name.png" /> Name</h5>
								<p class="text-company">Lorem Ipsum</p>
								<h5 class="mt-5 mb-2"><img src="img/icon/address.png" class="icon" alt="img/icon/address.png" /> Address</h5>
								<p class="text-company">Lorem Ipsum</p>
								<h5 class="mt-5 mb-1"><img src="img/icon/tel.png" class="icon" alt="img/icon/tel.png" /> Tel</h5>
								<p class="text-company">0800/000-000</p>
								<h5 class="mt-5 mb-1"><img src="img/icon/fax.png" class="icon" alt="img/icon/fax.png" /> Fax</h5>
								<p class="text-company">0800/000-000</p>
							</div>
							<div class="col-sm-6 mb-3 mb-sm-5">
								<h5 class="mb-1"><img src="img/icon/email.png" class="icon" alt="img/icon/email.png" /> Email</h5>
								<p class="text-company">email@mail.com</p>
								<h5 class="mt-5 mb-2"><img src="img/icon/watch.png" class="icon" alt="img/icon/watch.png" /> Work time</h5>
								<p class="text-company">Monday - Friday<br /><span class="font-weight-bold">08:00 - 19:00 hrs</span></p>
								<p class="text-company">Saturdays<br /><span class="font-weight-bold">08:00 - 14:00 hrs</span></p>
								<p class="text-company">We are <span class="text-uppercase font-weight-bold">closed</span> on Sundays.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<h2 class="wow slideInLeft"><img src="img/icon/pin.png" class="icon-2" alt="img/icon/pin.png" /> Location</h2>
						<div id="map">
							<iframe width="100%" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=walt%20street&key=AIzaSyBbsegDUEeWTZpmxRWaBMFdEdZy1j6kWRs" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<!-- Contact form start -->
				<div class="contact-form">
					<h2 class="wow slideInLeft"><img src="img/icon/form.png" class="icon-2" alt="img/icon/form.png" /> Contact form</h2>
					<form action="contact.php" method="post">
						<div class="row">
							<div class="col-lg-6">
								<div class="row">
									<div class="col-sm-6 col-lg-6">
										<div class="form-group">
											<label title="Required">Name</label>
											<input type="text" name="name" class="form-control mb-4" required />
										</div>
									</div>
									<div class="col-sm-6 col-lg-6">
										<div class="form-group">
											<label title="Required">Tel</label>
											<input type="number" name="tel" class="form-control mb-4" required />
										</div>
									</div>
									<div class="col-sm-6 col-lg-6">
										<div class="form-group">
											<label title="Required">Email</label>
											<input type="email" name="email" class="form-control mb-4" required />
										</div>
									</div>
									
									
									<div class="col-sm-6 col-lg-6">
										<div class="form-group">
											<label title="Required">Subject</label>
											<input type="text" name="subject" class="form-control mb-4" required />
										</div>
									</div>
									
									</div>
									</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="exampleTextarea">Message</label>
									<textarea name="mssg" class="form-control" id="exampleTextarea" rows="5" placeholder="Enter your message..." required></textarea>
								</div>
							</div>
							<div class="col text-right">
								<button id="btn-submit" name="contact" type="submit" class="btn btn-primary font-weight-bold">Submit</button>
							</div>
						</div>
					</form>
				</div>
<?php	
if(isset($_POST[contact])){
    include'admin/db.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO reviews (name, phone, email, subject,description)
VALUES ('$_POST[name]', '$_POST[tel]','$_POST[email]', '$_POST[subject]','$_POST[mssg]')";

if ($conn->query($sql) === TRUE) {
    
  echo"<script>alert('Your query is successfully submitted. We will contact you soon')</script>";
} else {
  
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
				<!-- Contact form end -->
			</div>
			<!-- Contact end -->
		</div>
	</div>
	<!-- Content end -->
	<!-- Footer start -->

<BR><BR><BR>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About </h6>
            <p class="text-justify">Durga auto industries is a industries loremlorem lorem lorem loremlorem lorem lorem lorem lorem lorem lorem lorem loremlorem lorem v lorem lorem lorem lorem lorem</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
             <?php
include'admin/db.php';
// Create connection
$conn101 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn101->connect_error) {
  die("Connection failed: " . $conn101->connect_error);
}

$sql101 = "SELECT * FROM category limit 4";
$result101 = $conn101->query($sql101);

if ($result101->num_rows > 0) {
  // output data of each row
  while($row101 = $result101->fetch_assoc()) {
  echo"
  										<a class='dropdown-item' href='products.php?id=$row101[id]&&category=$row101[name]'>$row101[name]</a>
		
";

  		}
} else {
  echo "0 results";
}
$conn101->close();
?>

             </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="index.php">Home</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              
              
              <li><a href="about.php">About Us</a></li>
              
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <style>
          .site-footer
{
  background-color:#26272b !important;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
      </style>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
         <a href="#">Durga Auto Industries</a>.
            </p>
          </div>
        </div>
      </div>
</footer>


		<a href="javascript:void(0)" id="back-to-top" title="Back to top"></a>
	</div>
	<!-- JavaScript links start end -->
	<script src="jq/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.2.2/web-animations.min.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/fontawesome-all.min.js"></script>

	<script src="js/main.js"></script>
	<!-- JavaScript links end -->
</body>

</html>