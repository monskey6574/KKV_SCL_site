<?php

include_once '../../connect.php';

include_once '../../connect.php';


   if (isset($_POST['submit'])){
   //variables for connection
   $name=$_POST['username'];
   $index=$_POST['index'];
 
   $mail=$_POST['email'];
   $address=$_POST['address'];
   $phone=$_POST['phone'];
   $title=$_POST['title'];
   $quali=$_POST['quali'];
   $other=$_POST['other'];
   $date=$_POST['date'];
   //connection
   $sql = "INSERT INTO `admin_data` (staf_Index, staf_Name, staf_Mail, staf_Address, staf_Phone, staf_Title,staf_Quali,staf_Other,staf_Adday) VALUES ('$index', '$name','$mail',' $address' ,'$phone', '$title', '$quali', '$other', '$date')";
   //now i can use the connection variable $conn from connect.php

   $result = mysqli_query($conn,$sql);
  

   if($result){
   
     header("location:admin.signup.php");
     $success_message = "data inserted successfully";
     echo $success_message;
     echo '<script type="text/javascript">alert("' . $success_message . '");</script>';
                            

   }else{
    echo "data not inserted. Error: " . mysqli_error($conn);
   }
   }


?>






