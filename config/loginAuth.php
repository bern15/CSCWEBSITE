<?php 
  SESSION_START();
  require_once 'dbcon.php';
  
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  
$sql = "SELECT * FROM admincsc WHERE username = '$username' AND  password = '$password'";
$result = $conn->query($sql);

  if($result->num_rows > 0) {
	$_SESSION['status'] = "LOGIN";
	Header('Location: ../admin/admin.php');
	
} else {
   $_SESSION['error']="INVALID USERNAME OR PASSWORD";
   Header('Location: ../index.php');
}
$conn->close();

?>