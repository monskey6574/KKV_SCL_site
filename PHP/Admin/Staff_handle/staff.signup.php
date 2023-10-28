<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  







  <style>
    @import url(../../CSS/style.css);
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'popins', sans-serif;
}
.form-title{
    text-align: center;
    margin-bottom: 30px;
    color: #611e38;
}

#sign-form {
    width: 50%;
    height: 100%;
    margin: 5vh auto;
    /* background-color: brown; */
    padding: 5%;
}

label:not(label:first-of-type) {
    display: block;
    margin: 15px 0 5px 0;
    font-size: 14px;
}

.sentence-agree {
    display: inline;
    font-size: 14px;
}

#submit {
    display: block;
    width: 100%;
    height: 30px;
    padding: 0 20px;
    background-color: #611e38 !important;
    color: #fff !important;
    font-size: 1rem;
    cursor: pointer;
}
.google-sign-btn{
    margin-top: 40px;
    background-color: #611e38 !important;
}

#submit:hover {
    background-color: #23236a !important;
}

div.hr-left, div.hr-right {
    width: 30%;
    height: 1px;
    background-color: #cccccc;
}

p.guide-google {
    font-size: 14px;
    color: #cccccc;
    width: 40%;
    margin: auto 5px;
}

input:not(input#terms-agree) {
    background-color: #fff; 
    width: 100%;
    height: 45px;
    padding-left: 20px;
    border: 1px solid #cccccc;
    border-radius: 30px;
    color: #333399;
}

input:focus {
    outline: 1px solid #611e38;
}

.google-sign-btn {
    width: 100%;
    height: 45px;
    border: 1px solid #cccccc;
    border-radius: 30px;
    outline: none;
    background-color: #fff;
    font-size: 1rem;
    cursor: pointer;
}

.google-sign-btn:hover {
    background-color: #cccccc;
}

i.fa-google {
    font-size: 25px;
    margin-right: 5px;
    vertical-align: middle;  
    color: #333399;
}

.form-caption {
    color: #737373;
    margin-bottom: 30px;;
}

.star-required {
    color:#333399;
}

input[type=checkbox] {
    margin: 30px 0 30px 0;
    accent-color: #333399;
}

a {
    color: #333399;
    text-decoration: none;
    font-size: 14px;
}

a:hover {
    color: #23236a;
}

.have-account-line {
    margin: 30px 0 30px 0;
    font-size: 14px;
}

.info {
    color: #737373;
    font-size: 14px;
}

.google-guide-container {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 20px 0;
}
    </style>
<div class="container">
        <form action="staff.signup.check.php" method="post" class="sign-form" id="sign-form" autocomplete="on">
            <h1 class="form-title">ADD STAFF </h1>
            <!-- <p class="form-caption">See your growth and get consulting support!</p> -->
           

            <label for="username">Name<span class="star-required"></span></label>
            <input type="text" name="username" id="username" placeholder="Name" autofocus required>

            <label for="index">Index<span class="star-required"></span></label>
            <input type="text" name="index" id="email" placeholder="" required>
            

            <label for="mail">Mail<span class="star-required"></span></label>
            <input type="email" name="email" id="email" placeholder="" required>
            <label for="mail">Address<span class="star-required"></span></label>
            <input type="address" name="address" id="address" placeholder="" required>
           
            <br>
            <label for="phone">Phone<span class="star-required"></span></label>
            <input type="text" name="phone" id="phone" placeholder="" autofocus required>

            <label for="title">Title<span class="star-required"></span></label>
            <input type="text" name="title" id="title" placeholder="" required>

            <label for="quali">Qualification<span class="star-required"></span></label>
            <input type="text" name="quali" id="quali" placeholder="" required>
           
            <br>
            <label for="other">Other<span class="star-required"></span></label>
            <input type="text" name="other" id="username" placeholder="" autofocus required>

            <label for="date">Date added<span class="star-required"></span></label>
            <input type="date" name="date" id="date" placeholder="today date" required>

        <br>
        <p></p>

            <!-- <input type="checkbox" name="terms-agree" id="terms-agree" required>
            <p class="sentence-agree">I agree to the <a href="">Terms & Conditions</a></p> -->
                <div class="sign-btn-container">
                    <button type="submit" name="submit" class="google-sign-btn"><i class="fab fa-google"></i>Sign Up</button>


        </form>
    </div>
<?php
    include_once 'staff.signup.check.php';

    if($result){
   
        header("location:../admin.staff.php");
        $success_message = "data inserted successfully";
        echo $success_message;
        echo '<script type="text/javascript">alert("' . $success_message . '");</script>';
                               
   
      }else{
       echo "data not inserted. Error: " . mysqli_error($conn);
      }
      
   
?>

  
</body>
</html>