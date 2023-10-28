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
h1{
  font-size:1em;
  text-align:center;

  letter-spacing: 1px;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.9);
  padding: 20px;
}
.nav-container {
  width: 300px;
  
  transition: all 0.5s linear;
}
.nav {
  list-style-type: none;
  margin:0;
  padding:0;
}
li{
  height: 50px;
  position:relative;
  background:linear-gradient(#292929, #242424);
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
}
li:hover .text{
 margin-left:20px
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

@media only screen and (max-width : 860px){
  .text{
    display:none;
  }
  .nav-container, a {
    width: 70px;
  }
  a:hover{
    width: 200px;
    z-index:1;
    border-top: 1px solid rgba(255,255,255,0.1);
    border-bottom: 1px solid black;
    box-shadow: 0 0 1px 1px black;
  }
  a:hover .text {
    display:block;
    padding-left: 30%;    
  }
  
}
@media only screen and (max-width: 480px){
  .nav-container, a{ width:50px; }
  span[class ^= "icon"]{left:8px;}
}

    </style>

<div class="nav-container">
  <ul class="nav">
    <li class="active">
      <a href="#">
 
        <span class="text">home</span>
      </a>
    </li>
    <li>
      <a href="admin.staff.php">

        <span class="text">About</span>
      </a>
    </li>
    <li>
      <a href="#">

          <span class="text">Portfolio</span>
      </a>
    </li>
    <li>
      <a href="#">

          <span class="text">Services</span>
      </a>
    </li>
    <li>
      <a href="#">
   
          <span class="text">testmonials</span>
      </a>
    </li>
    <li>
      <a href="#">

          <span class="text">Contact us</span>
      </a>
    </li>
  </ul>
</div>

<script src="https://use.fontawesome.com/c9d2b81f44.js">
</script>
</body>

</html>