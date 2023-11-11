d cs<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin-dash</title>
</head>
<body>
  <style>


    * {
  box-sizing: border-box;
}
body {
  height: 100%;
    background-color:white;
   
}


.container{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}






a {
  border-top: 1px solid rgba(255,255,255,0.1);
  border-bottom: 1px solid black;
  text-decoration: none;
  display:block;
  height:100%;
  width:100%;
  line-height:50px;
  color:#bbb;
  text-transform: uppercase;
  font-weight: bold;
  padding-left:25%;
  border-left: 5px solid transparent;
  letter-spacing: 1px;
  transition:all 0.3s linear;
}
.text {
  transition: all .4s linear;
  margin: 100px;
}

.active a {
  color: #f8e115;

  background-color: #1B1B1B;
  outline:0;
}
li:not(.active):hover a{
  color: #eee;


}

span[class ^= "icon"]{
  position:absolute;
  left:20px;
  font-size:1.5em;
  transition: all 0.3s linear;
}
/* card css */

/*service*/

.services a {
  text-decoration: none;
}
.services .service-box {
  text-align: center;
}
.services .service-box h2 {
  color: #222;
  font-size: 20px;
  padding-top: 10px;
  text-decoration: none;
}
.services a .service-box:hover h2 {
  color: #FB0626;
}
.services .investor-box {
    background-color: linear-gradient(90deg, rgba(31, 17, 206, 1) 0%, rgba(229, 43, 43, 1) 100%);

    background-position: center center;
    padding: 20px;
    width: 100%;
    min-height: 150px;
    display: block;
    position: relative;
  box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.2);
}
.services .investor-box h2 {
  font-size: 20px;
}
.services .investor-box .flip-view {
  position: absolute;
  top: 0;
  width: 100%;
  background-color:  rgba(128, 32, 0, 1);
  left: -10%;
  padding: 20px;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  visibility: hidden;
  opacity: 0;
  transition: all ease-in-out 333ms;
}
.services .investor-box a {
  color:  rgb(31, 17, 206, 1) ;

  font-size: 20px;
  font-weight: 600;
}
.services .investor-box:hover .flip-view {
    left: 0;
    visibility: visible;
    opacity: 1;
}


/* card css end */
/* Font */
@import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');

/* Design */
*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  background-color: #ecf9ff;
}

body {
  color: ;
  font-family: 'Quicksand', serif;
  font-style: normal;
  font-weight: 400;
  letter-spacing: 0;
  padding: 1rem;
}

.main{
  max-width: 1200px;
  margin: 0 auto;
}

h1 {
    font-size: 24px;
    font-weight: 400;
    text-align: center;
}

img {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}

.btn {
  color: #ffffff;
  padding: 0.8rem;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 4px;
  font-weight: 400;
  display: block;
  width: 100%;
  cursor: pointer;
  border: 1px solid rgba(255, 255, 255, 0.2);
  background: transparent;

}

.btn:hover {
  background-color: rgba(255, 255, 255, 0.12);
}

.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
}

.cards_item {
  display: flex;
  padding: 1rem;
}

@media (min-width: 40rem) {
  .cards_item {
    width: 50%;
  }
}

@media (min-width: 56rem) {
  .cards_item {
    width: 33.3333%;
  }
}


.made_by{
  font-weight: 400;
  font-size: 13px;
  margin-top: 35px;
  text-align: center;
}

@media only screen and (max-width : 860px){
  .text{
    color: #847284;
    
  }
  .nav-container, a {
    width: 70px;
  }
  .nav {
        flex-direction: column;
        text-align: center;
      }

      .nav li {
        text-align: center;
      }
 
 
  
}


    </style>
<!-- php for read data -->

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

$id =1 ;

$sql = "SELECT * FROM `staff_data` WHERE `staf_Index`='1'";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['staf_Name'];
$index = $row['staf_Index'];
$mail = $row['staf_Mail'];
$address = $row['staf_Address'];
$phone = $row['staf_Phone'];
$title = $row['staf_Title'];
$quali = $row['staf_Quali'];
$other = $row['staf_Other'];
$date = $row['staf_Adday'];



?>




<div class="container">
    <div class="main-body">
    
      
    
          
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $name?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $mail?>
                    </div>
                  </div>
                  <hr>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $phone?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $address?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Title</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $title?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Qualification</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $quali?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Other</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $other?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Assigned Date</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $date?>
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                    </div>
                  </div>
                </div>
              </div>

          
              



            </div>
          </div>

        </div>
</div>
<!--services-->
<div class="services pb-5">
          <div class="container">
            <div class="pt-5">
           
              <hr>
              <div class="row">
                <div class="col-md-3">
                  <div class="investor-box">
                    <h2>Exchange Control Regulations</h2>
                    <div class="flip-view">
                      <a href="#">Read More <i class="fas fa-chevron-circle-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="investor-box">
                    <h2>Brand Products made in Bangladesh EPZs</h2>
                    <div class="flip-view">
                      <a href="#">Read More <i class="fas fa-chevron-circle-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="investor-box">
                    <h2>Classification of Investors</h2>
                    <div class="flip-view">
                      <a href="#">Read More <i class="fas fa-chevron-circle-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="investor-box">
                    <h2>How To Apply</h2>
                    <div class="flip-view">
                      <a href="#">Read More <i class="fas fa-chevron-circle-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end services-->


<script src="https://use.fontawesome.com/c9d2b81f44.js">
</script>
</body>

</html>