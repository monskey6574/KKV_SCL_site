<!DOCTYPE html>
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
  <!-- nav bar section -->


<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <img class="logo" src="../img/scllogo.jpg" width="100px" height="100px" >
    <div class="sclname"><a class="navbar-brand fw-bold" href="#">සිරි විද්‍යාකීර්ති විද්‍යාලය<br>කල්එළිය </a></div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="history.html">History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="aboutus.html">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="academic.html">Academic</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="administration.html">Administration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="gallary.html">Gallary</a>
        </li>
      
       
       
      </ul>
      <button class="btn btn-outline-light fw-bold" type="submit">Contact Us</button>
    </div>
  </div>
</nav>







<!-- nav bar end -->









<!-- able start -->


<div class="container table-responsive py-5"> 
  <table class="table table-bordered table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">NO</th>
        <th scope="col">Subject</th>
        <th scope="col">Lesson Name</th>
        <th scope="col">Metirial</th>
        <th scope="col">Intro</th>
        <th scope="col">Submited date</th>
        <th scope="col">Submited by</th>
      </tr>
    </thead>
    <tbody>
    <?php
include_once '../PHP/connect.php';


$sql ="SELECT * FROM grade_1";
$result = mysqli_query($conn,$sql);

if($result){
  while($row=mysqli_fetch_assoc($result)){
    $no=$row['No'];
  
    $subject=$row['Subject'];
   


    $lesson=$row['Lesson'];
    $met=$row['Met'];
    $intro=$row['Intro'];
    
    $submted_day=$row['Subday'];
    $submited_by=$row['Subby'];
    
  
    echo'  <tr>
    <th scope="row">'.$no.'</th>

    <td>'.$subject.'</td>
    

  
    <td>'.$lesson.'</td>
    <td>'.$met.'</td>
    <td>'.$intro.'</td>
    <td>'.$submted_day.'</td>
    <td>'.$submited_by.'</td>
  
  
    <td>
    </td>
   
  </tr>';

  }
  
}











?>
      </tr>
     
      
      
    </tbody>
  </table>
  </div>
  

<!-- On tables -->




















<!-- profile start -->

<section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="../img/teachr.jpg"
                alt="Avatar" class="img-fluid my-5" style="width: 100%;" />
              <h5>Marie Horwitz</h5>
              <p>Web Designer</p>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted">info@example.com</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Phone</h6>
                    <p class="text-muted">123 456 789</p>
                  </div>
                </div>
                <h6>Projects</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Recent</h6>
                    <p class="text-muted">Lorem ipsum</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Most Viewed</h6>
                    <p class="text-muted">Dolor sit amet</p>
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




















<!-- Footer start -->



<footer>
  <div class="footer-top">
      <div class="container">
      
          <div class="row">
              <div class="col-lg-4">
                  
                  <h4>About us</h4>
                  <p>Lorem Ipsum ist einfach Dummy-Text der Druck- und Satzindustrie. Lorem Ipsum war der Standard der Branche Lorem Ipsum ist einfach Dummy-Text der Druck- und Satzindustrie. Lorem Ipsum war der Standard der Branche  </p>

              </div>

              <div class="col-md-4">
                  <h4>Information</h4>
                  <ul class="address1">
                      <li><i class="fa fa-map-marker"></i>Lorem Ipsum 132 xyz Lorem Ipsum</li>
                      <li><i class="fa fa-envelope"></i><a href="mailto:#">info@test.com</a></li>
                      <li><i class="fa fa-mobile" aria-hidden="true"></i> <a href="tel:12 34 56 78 90">12 34 56 78 90</a></li>
                  </ul>
              </div>

              <div class="col-md-4">
                  <h4>Follow us</h4>
                  <ul class="social-icon">
                      <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                      </svg></a></li>
                     
                  </ul>
              </div>

          </div>
      </div>
  </div>
  <div class="footer-bottom">
      <div class="container">
          <div class="row">
              <div class="col-sm-5">
                  <p class="copyright text-uppercase">
                  </p>
              </div>
              <div class="col-sm-7">
                  <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="history.html">History</a></li>
                    <li><a href="aboutus.html">About Us</a></li>
                    <li><a href="academic.html">Academic</a></li>
                    <li><a href="administration.html">Administration</a></li>
                    <li><a href="gallary.html">Gallary</a></li>
                    <li><a href="contactus.html">Contact Us</a></li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</footer>


<!-- Footer end -->

  

















  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>