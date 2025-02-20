<?php
SESSION_START();
require_once "dbcon.php";
$acctype = $_POST['acctype'];
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];


$sql = "INSERT INTO admincsc (acctype, username, password, name)
VALUES ('$acctype', '$username', '$password', '$name')";

if ($conn->query($sql) === TRUE) {
	$_SESSION['message'] = "NEW ACCOUNT ADDED";
    Header('Location: ../admin/admin.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>