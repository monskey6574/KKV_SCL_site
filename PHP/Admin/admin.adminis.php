<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admintration</title>
</head>
<body>
<?php
include_once '../connect.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>staff</title>

</head>
<body>






<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grade1</title>

  <link rel="stylesheet" href="../CSS/style.css">

  <link rel="stylesheet" href="academic.style.css">

  <!-- boostrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
  <style>


.add_button{

  float:right;
  margin-right: 50px;
}

    </style>






























<div claas="head">
  <h1>Staff of KKV</h1>
</div>
<div class="add">
  <a href="Staff_handle/staff.signup.php"><button class="add_button">Add Staff</button></a>
</div>

<!-- On tables -->

<div class="container table-responsive py-5"> 
  <table class="table table-bordered table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Index</th>
        <th scope="col">Name</th>
        <th scope="col">Mail</th>
        <th scope="col">Address</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Title</th>
        <th scope="col">Qualification</th>
        <th scope="col">Other</th>
        <th scope="col">Assigend date</th>
        <th scope="col">Update/Delete</th>
        

      </tr>
    </thead>
    <tbody>
      <?php

      $sql ="SELECT * FROM admin_data";
      $result = mysqli_query($conn,$sql);

      if($result){
        while($row=mysqli_fetch_assoc($result)){
          $no=$row['No'];
          $id=$row['staf_Index'];
          $name=$row['staf_Name'];
         
          $address=$row['staf_Address'];
          $mail=$row['staf_Mail'];
          $phone=$row['staf_Phone'];
          $title=$row['staf_Title'];
          $quali=$row['staf_Quali'];
          $othr=$row['staf_Other'];
          $date=$row['staf_Adday'];
          echo'  <tr>
          <th scope="row">'.$no.'</th>
          <td>'.$id.'</td>
          <td>'.$name.'</td>
          
          <td>'.$mail.'</td>
          <td>'.$address.'</td>
          <td>'.$phone.'</td>
          <td>'.$title.'</td>
          <td>'.$quali.'</td>
          <td>'.$othr.'</td>
          <td>'.$date.'</td>
          <td>
          <button class="btn btn-primary"><a href="Admin_handle/update.admin.php?updated-admin-index='.$id.'" class="text-light">Update </a></button>
          <button class="btn btn-danger"><a href="Admin_handle/delete.admin.php?deleted-admin-index='.$id.'"class="text-light">Delete </a></button>
          </td>
         
        </tr>';

        }
        
      }



   
        
     
  ?>
  <style>
    a{
      text-decoration: none;
      color: white;
    }
    button{
      margin: 5px;
      display:flex;
    }
    </style>


                               
     
    </tbody>
  </table>
  </div>
  

<!-- On tables -->







































<!-- Footer start -->





<!-- Footer end -->

  

















  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
  
</body>
</html>
  
</body>
</html>