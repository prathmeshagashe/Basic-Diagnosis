
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
			<form id="in" method="post" action="insert1.php" >
			<h2>Login</h2>
			<div class="form-group">
			<label for="exampleInputUserName"></label>
			<input name="UserName" type="text" class="form-control" id="exampleInputUserName" placeholder="Enter UserName" required>
		
		  </div>
			
		  
		  <div class="form-group">
			<label for="exampleInputEmail"></label>
			<input name="Email" type="email" class="form-control" id="exampleInputEmail" placeholder="Enter Email" required>
		  </div>
		  
		   <div class="form-group">
			<label for="Paswrd"></label>
			<input name="Paswrd" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>

<script> src="js/app.js" </script>
   <script> src="js/particles.js" </script>
   <script> src="js/particles.min.js" </script>
  
  </body>
  
  