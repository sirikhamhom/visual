<?php
include "connect.php";

$id=$GET['id'];
$sql = "DELETE FROM MyGuests WHERE id=id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("location: select_smartfarm.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>