<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		.container{
			margin-top: 8%;
			width: 400px;
			border: ridge 1.5px white;
			padding: 20px;
		}
		body{
			background: #E0EAFC;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #CFDEF3, #E0EAFC);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #CFDEF3, #E0EAFC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

		}
    .btn-file {
  position: relative;
  overflow: hidden;
}
.upload_dropZone {
  color: #0f3c4b;
  background-color: var(--colorPrimaryPale, #c8dadf);
  outline: 2px dashed var(--colorPrimaryHalf, #c1ddef);
  outline-offset: -12px;
  transition:
    outline-offset 0.2s ease-out,
    outline-color 0.3s ease-in-out,
    background-color 0.2s ease-out;
}
.upload_dropZone.highlight {
  outline-offset: -4px;
  outline-color: var(--colorPrimaryNormal, #0576bd);
  background-color: var(--colorPrimaryEighth, #c8dadf);
}
.upload_svg {
  fill: var(--colorPrimaryNormal, #0576bd);
}
.btn-upload {
  color: #fff;
  background-color: var(--colorPrimaryNormal);
}
.btn-upload:hover,
.btn-upload:focus {
  color: #fff;
  background-color: var(--colorPrimaryGlare);
}
.upload_img {
  width: calc(33.333% - (2rem / 3));
  object-fit: contain;
}
.btn-primary{
  margin-left: 40%;
  justify-content: center;
}
	</style>
</head>
<body>
	<div>
		<?php
			if(isset($_POST['create'])){
				$firstname  = $_POST['firstname'];
				$lastname   = $_POST['lastname'];
				$phoneno    = $_POST['phoneno'];
				$email      = $_POST['email'];
				$password   = $_POST['password'];

				echo $firstname ." ".$lastname ." ".$phoneno ." ".$email ." ".$password; 
			}
		?>
	</div>
	<div class="container">
		<h2>Registration Form</h2>
	<form action="bootstrapform.php" method="post">
		<div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" class="form-control" id="exampleInputfirstname" name="firstname">
  </div>
  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" class="form-control" id="exampleInputlastname" name="lastname">
  </div>
  <div class="form-group">
    <label for="phoneno">Phone Number</label>
    <input type="text" class="form-control" id="exampleInputphoneno" name="phoneno">
  </div>
  <div class="form-group">
    <label for="Email1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword" name="password">
  </div>
   





  <fieldset class="upload_dropZone text-center mb-3 p-4">

    <legend class="visually-hidden">Image uploader</legend>

    <svg class="upload_svg" width="60" height="60" aria-hidden="true">
      <use href="#icon-imageUpload"></use>
    </svg>

    <p class="small my-2">Drag &amp; Drop logo image(s) inside dashed region<br><i>or</i></p>

    <input id="upload_image_logo" data-post-name="image_logo" data-post-url="https://someplace.com/image/uploads/logos/" class="position-absolute invisible" type="file" multiple accept="image/jpeg, image/png, image/svg+xml" />

    <label class="btn btn-upload mb-3" for="upload_image_logo">Choose file(s)</label>

    <div class="upload_gallery d-flex flex-wrap justify-content-center gap-3 mb-0"></div>

  </fieldset>




<svg style="display:none">
  <defs>
    <symbol id="icon-imageUpload" clip-rule="evenodd" viewBox="0 0 96 96">
      <path d="M47 6a21 21 0 0 0-12.3 3.8c-2.7 2.1-4.4 5-4.7 7.1-5.8 1.2-10.3 5.6-10.3 10.6 0 6 5.8 11 13 11h12.6V22.7l-7.1 6.8c-.4.3-.9.5-1.4.5-1 0-2-.8-2-1.7 0-.4.3-.9.6-1.2l10.3-8.8c.3-.4.8-.6 1.3-.6.6 0 1 .2 1.4.6l10.2 8.8c.4.3.6.8.6 1.2 0 1-.9 1.7-2 1.7-.5 0-1-.2-1.3-.5l-7.2-6.8v15.6h14.4c6.1 0 11.2-4.1 11.2-9.4 0-5-4-8.8-9.5-9.4C63.8 11.8 56 5.8 47 6Zm-1.7 42.7V38.4h3.4v10.3c0 .8-.7 1.5-1.7 1.5s-1.7-.7-1.7-1.5Z M27 49c-4 0-7 2-7 6v29c0 3 3 6 6 6h42c3 0 6-3 6-6V55c0-4-3-6-7-6H28Zm41 3c1 0 3 1 3 3v19l-13-6a2 2 0 0 0-2 0L44 79l-10-5a2 2 0 0 0-2 0l-9 7V55c0-2 2-3 4-3h41Z M40 62c0 2-2 4-5 4s-5-2-5-4 2-4 5-4 5 2 5 4Z"/>
    </symbol>
  </defs>
</svg>
<div classs="submitbtn">
  
  
 
<button type="submit" class="btn btn-primary" name="create">Sign up</button>
    </div>
</form>
</div>

<script src="../../../JS/grade.add.work.js"></script>


</body>
</html>
