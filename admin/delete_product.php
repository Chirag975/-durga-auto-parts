<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php
    include'db.php';
    
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM products WHERE id='$_GET[id]'";

if ($conn->query($sql) === TRUE) {
    echo"<script>location.href='deleted.php'</script>";
} else {
    echo"<script>location.href='ndeleted.php'</script>";
}

$conn->close();
    ?>
    