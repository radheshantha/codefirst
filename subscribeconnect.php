<?php

$conn=mysqli_connect("localhost","root","","codefirst");
if (!$conn) {
  die("conncection failed: " .mysqli_connect_error());
}
echo "Connected successfully"

 ?>
