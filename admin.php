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
			<form id="admin" method="post" action="insert2.php">
			<h2>Admin Login</h2>
		  <div class="form-group">
			<label for="AdminName"></label>
			<input name="AdminName" type="text" class="form-control" id="exampleInputName" placeholder="Enter Name" required>
		  </div>
		  <div class="form-group">
			<label for="AdminPassword"></label>
			<input name="AdminPassword" type="password" class="form-control" id="exampleInputPassword" placeholder="Enter Password" required>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
<script> src="js/app.js" </script>
   <script> src="js/particles.js" </script>
   <script> src="js/particles.min.js" </script>

  </body>
  
  
  