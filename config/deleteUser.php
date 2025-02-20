<?php
SESSION_START();
require_once "dbcon.php";
$id = $_POST['id'];
$sql = "DELETE FROM admincsc WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  $_SESSION['message'] = "DELETED SUCCESSFULLY";
    Header('Location: ../admin/admin.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>