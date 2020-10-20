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
     
     
     <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</head>
<body>
<br><BR><br>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slider1.png" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/slider2.png" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/slider3.png" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<div id="parts">
    
		<div class="container">
	
					<!-- Top parts start -->
					<h2 class="wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;color:rgba(181,8,8,1); !important"> Top categories</h2>
					
					
					<div id="top-parts" class="row">
					    
					    <?php
include'admin/db.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM category";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  echo"
  		<div class='col-sm-6 col-lg-3 p-3 mb-3'>
						    
							<div class='item'>
								<a href='products.php?id=$row[id]&&category=$row[name]'>
									<h4 class='text-uppercase'>$row[name]</h4>
									<div class='parts-img'>
										<img src='$row[image]' alt='$row[name]' style='max-height:166px'>
									</div>
								</a>
								
								</div>
						</div>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

					    
						
					</div>
					<!-- Top parts start -->
				</div>
				
				
				<div id="brands">
				<div class="container">
					<!-- Top brands start -->
					<h2 class="wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
					     Top brands</h2>
					<div id="top-brands" class="row">
						<div class="col-sm-6 col-lg-4 p-3 mb-3">
							<a href="javascript:void(0)">
								<div class="item">
									<h4 class="text-uppercase">Audi</h4>
									<div class="brands-logo">
										<img src="img/brands/audi.png" alt="img/brands/audi.png">
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-6 col-lg-4 p-3 mb-3">
							<a href="javascript:void(0)">
								<div class="item">
									<h4 class="text-uppercase">Bmw</h4>
									<div class="brands-logo">
										<img src="img/brands/bmw.png" alt="img/brands/bmw.png">
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-6 col-lg-4 p-3 mb-3">
							<a href="javascript:void(0)">
								<div class="item">
									<h4 class="text-uppercase">Ford</h4>
									<div class="brands-logo">
										<img src="img/brands/ford.png" alt="img/brands/ford.png">
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-6 col-lg-4 p-3 mb-3">
							<a href="javascript:void(0)">
								<div class="item">
									<h4 class="text-uppercase">Mercedes-Benz</h4>
									<div class="brands-logo">
										<img src="img/brands/mercedes-benz.png" alt="img/brands/mercedes-benz.png">
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-6 col-lg-4 p-3 mb-3">
							<a href="javascript:void(0)">
								<div class="item">
									<h4 class="text-uppercase">Nissan</h4>
									<div class="brands-logo">
										<img src="img/brands/nissan.png" alt="img/brands/nissan.png">
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-6 col-lg-4 p-3 mb-3">
							<a href="javascript:void(0)">
								<div class="item">
									<h4 class="text-uppercase">Opel</h4>
									<div class="brands-logo">
										<img src="img/brands/opel.png" alt="img/brands/opel.png">
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-6 col-lg-4 p-3 mb-3">
							<a href="javascript:void(0)">
								<div class="item">
									<h4 class="text-uppercase">Renault</h4>
									<div class="brands-logo">
										<img src="img/brands/renault.png" alt="img/brands/renault.png">
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-6 col-lg-4 p-3 mb-3">
							<a href="javascript:void(0)">
								<div class="item">
									<h4 class="text-uppercase">Vw</h4>
									<div class="brands-logo">
										<img src="img/brands/vw.png" alt="img/brands/vw.png">
									</div>
								</div>
							</a>
						</div>
					</div>
					<!-- Top brands end -->
					<!-- All brands start -->
					<div id="all-brands">
						<div class="row">
							<div class="col-sm-6 col-lg-4">
								<div class="row">
									<div class="col-6 p-3 mb-3">
										<a href="javascript:void(0)">
											<div class="item">
												<h4 class="text-uppercase">Alfa Romeo</h4>
												<div class="brands-logo">
													<img src="img/brands/alfa-romeo.png" alt="img/brands/alfa-romeo.png">
												</div>
											</div>
										</a>
									</div>
									<div class="col-6 p-3 mb-3">
										<a href="javascript:void(0)">
											<div class="item">
												<h4 class="text-uppercase">Audi</h4>
												<div class="brands-logo">
													<img src="img/brands/audi.png" alt="img/brands/audi.png">
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="row">
									<div class="col-6 p-3 mb-3">
										<a href="javascript:void(0)">
											<div class="item">
												<h4 class="text-uppercase">Bmw</h4>
												<div class="brands-logo">
													<img src="img/brands/bmw.png" alt="img/brands/bmw.png">
												</div>
											</div>
										</a>
									</div>
									<div class="col-6 p-3 mb-3">
										<a href="javascript:void(0)">
											<div class="item">
												<h4 class="text-uppercase">Citroën</h4>
												<div class="brands-logo">
													<img src="img/brands/citroen.png" alt="img/brands/citroen.png">
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="row">
									<div class="col-6 p-3 mb-3">
										<a href="javascript:void(0)">
											<div class="item">
												<h4 class="text-uppercase">Fiat</h4>
												<div class="brands-logo">
													<img src="img/brands/fiat.png" alt="img/brands/fiat.png">
												</div>
											</div>
										</a>
									</div>
									<div class="col-6 p-3 mb-3">
										<a href="javascript:void(0)">
											<div class="item">
												<h4 class="text-uppercase">Honda</h4>
												<div class="brands-logo">
													<img src="img/brands/honda.png" alt="img/brands/honda.png">
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="row">
									<div class="col-6 p-3 mb-3">
										<a href="javascript:void(0)">
											<div class="item">
												<h4 class="text-uppercase">Hyundai</h4>
												<div class="brands-logo">
													<img src="img/brands/hyundai.png" alt="img/brands/hyundai.png">
												</div>
											</div>
										</a>
									</div>
									<div class="col-6 p-3 mb-3">
										<a href="javascript:void(0)">
											<div class="item">
												<h4 class="text-uppercase">Mazda</h4>
												<div class="brands-logo">
													<img src="img/brands/mazda.png" alt="img/brands/mazda.png">
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="row">
									<div class="col-6 p-3 mb-3">
										<a href="javascript:void(0)">
											<div class="item">
												<h4 class="text-uppercase">Mercedes-Benz</h4>
												<div class="brands-logo">
													<img src="img/brands/mercedes-benz.png" alt="img/brands/mercedes-benz.png">
												</div>
											</div>
										</a>
									</div>
									<div class="col-6 p-3 mb-3">
										<a href="javascript:void(0)">
											<div class="item">
												<h4 class="text-uppercase">Mitsubishi</h4>
												<div class="brands-logo">
													<img src="img/brands/mitsubishi.png" alt="img/brands/mitsubishi.png">
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="row">
									<div class="col-6 p-3 mb-3">
										<a href="javascript:void(0)">
											<div class="item">
												<h4 class="text-uppercase">Nissan</h4>
												<div class="brands-logo">
													<img src="img/brands/nissan.png" alt="img/brands/nissan.png">
												</div>
											</div>
										</a>
									</div>
									<div class="col-6 p-3 mb-3">
										<a href="javascript:void(0)">
											<div class="item">
												<h4 class="text-uppercase">Peugeot</h4>
												<div class="brands-logo">
													<img src="img/brands/peugeot.png" alt="img/brands/peugeot.png">
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="row">
									<div class="col-6 p-3 mb-3">
										<a href="javascript:void(0)">
											<div class="item">
												<h4 class="text-uppercase">Subaru</h4>
												<div class="brands-logo">
													<img src="img/brands/subaru.png" alt="img/brands/subaru.png">
												</div>
											</div>
										</a>
									</div>
									<div class="col-6 p-3 mb-3">
										<a href="javascript:void(0)">
											<div class="item">
												<h4 class="text-uppercase">Suzuki</h4>
												<div class="brands-logo">
													<img src="img/brands/suzuki.png" alt="img/brands/suzuki.png">
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="row">
									<div class="col-6 p-3 mb-3">
										<a href="javascript:void(0)">
											<div class="item">
												<h4 class="text-uppercase">Toyota</h4>
												<div class="brands-logo">
													<img src="img/brands/toyota.png" alt="img/brands/toyota.png">
												</div>
											</div>
										</a>
									</div>
									<div class="col-6 p-3 mb-3">
										<a href="javascript:void(0)">
											<div class="item">
												<h4 class="text-uppercase">Volvo</h4>
												<div class="brands-logo">
													<img src="img/brands/volvo.png" alt="img/brands/volvo.png">
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					<!-- All brands end -->
				</div>
			</div>
			  <!-- Site footer -->
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