<?php
	error_reporting(E_ALL ^ E_NOTICE);
 	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Registration Page </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link href="img/styles.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light" style="z-index:1;">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">XyZ University</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="profile.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Enrollment</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About us</a>
				</li>

			</ul>
		</div>
	</div>
	</nav>												
	<div class="container text-center">
		<hl>Welcome to the Registration page</hl>
		<br>
	</div>
	<br>
		<!-- for retrieving the following information for the employee: email,
	 password, firstName, lastName, address, phone, salary, SSN. -->
	<form class = "container text-center"  action="profile.php?a=registration" method="post">

		<label for= "firstName" id="name">First Name</label>
		<input type="Name"  placeholder="First Name" name = "fname" required>

		<br>
		<br>
		<label for= "lastName" id="name">Last Name</label>
		<input type="Name" placeholder="Last Name" name = "lname" required>
		<br>
		<br>
		<label for= "phone" id= "phone">Phone</label>
		<input type="phone" placeholder="Phone" name = "phone" required>

		<br>
		<br>
		<label for= "ssn" id= "password">SSN</label>
		<input placeholder="Social Security Number" name = "ssn" required>	
		<br> 
		<br>	
		<label for= "email" id="email">Email</label>  
		<input type="email" placeholder="Email" name = "email" required>

		<br>
		<br>
		<label for= "password" id= "password">Password</label>
		<input type="password"  placeholder="Password" name = "password" required>
		<br>
		<br>
		<input type="submit" value="Submit" name="Submit">
		<button type="reset">Reset</button></br>
		
	</form>
	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
