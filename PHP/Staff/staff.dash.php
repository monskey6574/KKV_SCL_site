<!DOCTYPE html>
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
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
    width: 50%;
}


h1{
  font-size:1em;
  text-align:center;

  letter-spacing: 1px;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.9);
  padding: 20px;
}
.nav-container {
  width: 100%;
  
  transition: all 0.5s linear;
}
.nav {
  list-style-type: none;
  margin:0;
  padding:0;
  display: flex;
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

.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.card_content {
  padding: 1rem;
  background: linear-gradient(to bottom left, #1B1B1B 0%, #1B1B1B 100%);
  
}

.card_title {
  color: #ffffff;
  font-size: 1.1rem;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin: 0px;
}

.card_text {
  color: #ffffff;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;    
  font-weight: 400;
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
h6{
  color: #999;
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
<div class="main">

<ul class="cards">
<li class="cards_item">
    <div class="card">
      <div class="card_image"><img src="https://picsum.photos/500/300/?image=5"></div>
      <div class="card_content">
        <h2 class="card_title">Class work </h2>
        <p class="card_text">Choose a grade and add class work</p>
        <a class="btn btn-primary" href="Grade/gradechoose.php" role="button">GO</a>      </div>
    </div>
  </li>
  <li class="cards_item">
    <div class="card">
      <div class="card_image"><img src="https://picsum.photos/500/300/?image=5"></div>
      <div class="card_content">
        <h2 class="card_title">Card Grid Layout</h2>
        <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
        <button class="btn card_btn">Read More</button>
      </div>
    </div>
  </li>
  <li class="cards_item">
    <div class="card">
      <div class="card_image"><img src="https://picsum.photos/500/300/?image=11"></div>
      <div class="card_content">
        <h2 class="card_title">Card Grid Layout</h2>
        <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
        <button class="btn card_btn">Read More</button>
      </div>
    </div>
  </li>
  <li class="cards_item">
    <div class="card">
      <div class="card_image"><img src="https://picsum.photos/500/300/?image=14"></div>
      <div class="card_content">
        <h2 class="card_title">Card Grid Layout</h2>
        <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
        <button class="btn card_btn">Read More</button>
      </div>
    </div>
  </li>
  <li class="cards_item">
    <div class="card">
      <div class="card_image"><img src="https://picsum.photos/500/300/?image=17"></div>
      <div class="card_content">
        <h2 class="card_title">Card Grid Layout</h2>
        <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
        <button class="btn card_btn">Read More</button>
      </div>
    </div>
  </li>
  <li class="cards_item">
    <div class="card">
      <div class="card_image"><img src="https://picsum.photos/500/300/?image=2"></div>
      <div class="card_content">
        <h2 class="card_title">Card Grid Layout</h2>
        <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
        <button class="btn card_btn">Read More</button>
      </div>
    </div>
  </li>
</ul>
</div>



<script src="https://use.fontawesome.com/c9d2b81f44.js">
</script>
</body>

</html>