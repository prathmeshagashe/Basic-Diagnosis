
<?php 

include 'style.php';
include 'header.php';


?>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
  <body>
 <div id="particles-js">
	<div class="container">
			<form id="up" method="post" action="insert.php">
			<h2>Sign Up</h2>
			<p class="lead"><h6>If you are already a member, then click on login button.</h6><p>
		  <div class="form-group">
			<label for="Name"></label>
			<input name="Name" type="text" class="form-control" id="exampleInputName" placeholder="Enter Name" required>
		  </div>
		  <div class="form-group">
			<label for="Email"></label>
			<input name="Email" type="email" class="form-control" id="exampleInputEmail" placeholder="Enter Email" required>
		  </div>
		  <div class="form-group">
			<label for="Age"></label>
			<input name="Age" type="text" class="form-control" id="exampleInputAge" placeholder="Enter Age" required>
		  </div>
		  <div class="form-group">
			<label for="Address"></label>
			<input name="Address" type="text" class="form-control" id="exampleInputAddress" placeholder="Enter Address" required>
		  </div>
		  <div class="form-group">
			<label for="Blood_Group"></label>
			<input name="Blood_Group" type="text" class="form-control" id="exampleInputBloodGroup" placeholder="Enter Blood Group" required>
		  </div>
		  <div class="form-group">
			<label for="PhoneNo"></label>
			<input name="PhoneNo" type="text" class="form-control" id="exampleInputPhoneNo" placeholder="Enter Phone Number" required>
		  </div>
		  <div class="form-group">
			<label for="Paswrd"></label>
			<input name="Paswrd" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
<script> src="js/app.js" </script>
   <script> src="js/particles.js" </script>
   <script> src="js/particles.min.js" </script>

  </body>
  
  
  