<?php
 
 $Servername = "localhost";
 $Username = "Ayodya";
 $Password = "mkAqpJ.B*NWPAw.r";
 $Database = "kaleliya";

$conn =mysqli_connect($Servername,$Username,$Password,$Database);
// Check connection
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}
else{
  // echo "Connected successfully";
}
