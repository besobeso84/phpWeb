<?php
  $con = mysqli_connect("localhost", "root", "", "esusimple");
  mysqli_query($con, "SET NAMES 'utf8'");
  if(!$con){
    die("ERROR!!!");
  }
 ?>
