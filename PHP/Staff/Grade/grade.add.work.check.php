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

if (isset($_POST['submit'])){
  //variables for connection
  $subject=$_POST['subject'];
  $lesson=$_POST['lesson'];
  $met=$_POST['met'];

  $intro=$_POST['intro'];
  $submited_day=$_POST['submited_day'];
  $submited_by=$_POST['submited_by'];

 
  //connection
  $sql = "INSERT INTO `grade_1` (`Subject`, `Lesson`, `Met`, `Intro`,`Subday`, `Subby`) VALUES ('$subject', '$lesson','$met' ,'$intro', '$submited_day', '$submited_by');";
  //now i can use the connection variable $conn from connect.php

  $result = mysqli_query($conn,$sql);
 

  if($result){
  
    header("location:../Grade/grade.add.work.php");
    $success_message = "data inserted successfully";
    echo $success_message;
    echo '<script type="text/javascript">alert("' . $success_message . '");</script>';
                           

  }else{
   echo "data not inserted. Error: " . mysqli_error($conn);
  }
  }
