    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"  />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
<?php
  include "connect.php";

  $sql = "SELECT * FROM tbl_smartfarm";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  // output data of each row
  ?>

<table class="table table-hover table-striped">
  </tr>
          <th>id <c/th>
          <th>zone <c/th>
          <th>board <c/th>
          <th>temp <c/th>
          <th>huml <c/th>
          <th>dmy <c/th>
          <th>เเก้ไข <c/th>
          <th>ลบ <c/th>
  
  </tr>
 <?php
    while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["id"]. " -Zone: " . $row["zone"]. " -Board " . $row["board"]." -Tempolary".$row["temp"] ." - Humidity".$row["humi"]." ". $row["dmy"]. "<br>";
 ?>
    <tr>
        <td> <?php echo $row["id"]; ?> </td>
        <td> <?php echo $row["zone"]; ?> </td>
        <td> <?php echo $row["board"]; ?> </td>
        <td> <?php echo $row["temp"]; ?> </td>
        <td> <?php echo $row["huml"]; ?> </td>
        <td> <?php echo $row["dmy"]; ?> </td>
        <td> <?php echo"<a href='edit_smartfarm.php?id=$row'>เเก้ไข </a>"; ?> </td>
        <td> <?php echo"<a href='delete_smartfarm.php?id=$row'>ลบ </a>"; ?> </td>

    </tr>
 <?php   
    }
 ?>

</table>

<?php
  } else {
    echo "0 results";
  }
$conn->close();

?>