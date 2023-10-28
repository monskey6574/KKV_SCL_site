<?php

include_once 'functions.php';
include_once 'connect.php';



if (isset($_POST['submit'])){
//variables for connection
$usersname = $_POST['mail']; //asign values to variables
$pwd = $_POST['index'];
//connection

require_once 'connect.php';
$sql ="SELECT * FROM staff WHERE mail = "$usersname" AND index = "$pwd";"; // Use prepared statements to prevent SQL injection
//now i can use the connection variable $conn from connect.php
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result ,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
if($count==1){
  header("location/welcome.php")
}else{
  echo "Wrong Username or Password";
}


// if (emptyInputes($username,$pwd) !== false){
//   header("Location: ../login.php?error=emptyinput");
//   exit();
// }
// loginUser($username,$pwd);





