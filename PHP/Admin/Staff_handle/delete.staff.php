<?php
include_once '../../connect.php';

if (isset($_GET['deleted-staff-index'])){
  $id=$_GET['deleted-staff-index'];
  $sql="DELETE FROM `staff_data` WHERE `staf_Index`='$id'";
  $result = mysqli_query($conn,$sql);
  if($result){
    header("location:../admin.staff.php");
    $success_message = "data deleted successfully";
    echo $success_message;
    echo '<script type="text/javascript">alert("' . $success_message . '");</script>';
  }
    else{
      echo "data not deleted. Error: " . mysqli_error($conn);
    }

}







