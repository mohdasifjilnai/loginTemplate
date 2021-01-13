<?php
  $mysqli=new mysqli("localhost","root","","logindata");
   if($mysqli->connect_errno)
   {
   	echo "Failed to connect to ";
   	exit();
   }
?>