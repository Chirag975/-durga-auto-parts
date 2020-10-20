<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<title>Admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Auto parts Admin</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>

  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="allcategory.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  All Category</a>
    <a href="addcategory.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Add Category</a>
    <a href="editcategory.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Edit/Delete Category</a>
    <a href="allproducts.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-bullseye fa-fw"></i> All Product</a>
    <a href="addproducts.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-bullseye fa-fw"></i> Add Product</a>
    <a href="editproducts.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-diamond fa-fw"></i>  Edit/Delete Product</a>
    <a href="reviews.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i> Reviews</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i> Logout</a>
    
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i>Edit Product</b></h5>
  </header>





<?php
include'db.php';
// Create connection
$conn2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn2->connect_error) {
  die("Connection failed: " . $conn2->connect_error);
}

$sql2 = "SELECT * FROM products where id='$_GET[id]'";
$result2 = $conn2->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {

$p=$row2[title];
$i=$row2[img];
$id=$row2[id];
$keywords=$row2[keywords];
$category=$row2[category];
$price=$row2[price];
$description=$row2[description];
  }
} else {
  echo "0 results";
}
$conn2->close();
?>



<?php

//print_r($_FILES);
if(isset($_FILES['image']))
{
    $errors=array();
    $allowed_ext= array('jpg','jpeg','png','gif');
    $file_name =$_FILES['image']['name'];
 //   $file_name =$_FILES['image']['tmp_name'];
    $file_ext = strtolower( end(explode('.',$file_name)));


    $file_size=$_FILES['image']['size'];
    $file_tmp= $_FILES['image']['tmp_name'];


    $type = pathinfo($file_tmp, PATHINFO_EXTENSION);
    $data = file_get_contents($file_tmp);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    
if($data==null){
    $img=$i;
}else{
    $img=$base64;
}



    include'db.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE products SET title='$_POST[title]', img='$img',category='$_POST[category]',keywords='$_POST[keywords]',price='$_POST[price]',description='$_POST[description]' WHERE id='$_GET[id]'";

if ($conn->query($sql) === TRUE) {
    echo"<script>location.href='ucat.php'</script>";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
}
?>


<div style="padding:20px">
<form class="w3-container"action="" method="POST" enctype="multipart/form-data">
 
 
<label for="email">Product Name:</label>
      
<input class="w3-input" type="text" value="<?php echo $p ?>" name="title">
<br>
<label>Category</label>

<select class="w3-input"  name="category" value="<?php echo $category ?>" required>
    
    
<?php
include'db.php';
// Create connection
$conn1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn1->connect_error) {
  die("Connection failed: " . $conn1->connect_error);
}

$sql1 = "SELECT id,name FROM category";
$result1 = $conn1->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
  echo"

      <option value='$row1[name]'>$row1[name]</option>";
  }
} else {
  echo "0 results";
}
$conn1->close();
?>
</select>
<br>
 
<label for="email">Keywords:</label>
      
<input class="w3-input" type="text" value="<?php echo $keywords ?>" name="keywords">
<br>

<label for="email">Description:</label>
      
<input class="w3-input" type="text" value="<?php echo $description ?>"name="description">
<br>

<label for="email">Price:</label>
      
<input class="w3-input" type="text" value="<?php echo $price ?>" name="price">
<br>

<label for="pwd">Product Image:</label>
      
    <input type="file" name="image" />

<br><br><BR>
    <input type="submit" class="btn btn-primary" value="submit"> 


</form> 

</div>
    </div>


<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
