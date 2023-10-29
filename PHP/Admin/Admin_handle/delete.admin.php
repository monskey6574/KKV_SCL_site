<?php
include_once '../../connect.php';

if (isset($_GET['deleted-admin-index'])){
  $id=$_GET['deleted-admin-index'];
  $sql="DELETE FROM `admin_data` WHERE `staf_Index`='$id'";
  $result = mysqli_query($conn,$sql);
  if($result){
    header("location:../admin.adminis.php");
    $success_message = "data deleted successfully";
    echo $success_message;
    echo '<script type="text/javascript">alert("' . $success_message . '");</script>';
  }
    else{
      echo "data not deleted. Error: " . mysqli_error($conn);
    }

}







