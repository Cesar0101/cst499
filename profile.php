<?php
	error_reporting(E_ALL ^ E_NOTICE);
  session_start();
?>
<?php  require "dbconnection.php";
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
	<title> Profile Page </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<!-- CSS only -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="img/styles.css" rel="stylesheet">
</head>
<body style="background-color: slategray;">
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="z-index:1;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">XyZ University</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!--      --------   NAVIGATION BAR  --------- -- -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Landing.php">Home</a>
        </li>


        <li class="nav-item">
          <a class="nav-link disabled" href="#">Enrollment</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="#">About us</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="Landing.php">Log out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container text-center">
  <hl>Welcome to the Profile page</hl><br>
</div>  

<div class = "content mt-5" >
  <div class = "row">
<div style = "width: 20rem; display: inline-block;" class = "align-top" >
 
<div class="card" style="width: 18rem;">
  <!-- <img src="..." class="card-img-top" alt="..."> -->

  <div class="card-body">
    <h5 class="card-title">  <?php echo "$fname" . "$lname";?>
</h5>
    <p class="card-text"><i class="bi bi-telephone"></i> <?php echo "$phone"; ?><br> <i class="bi bi-hash"></i> <?php echo $ssn ;?>
    <br><i class="bi bi-envelope"></i> <?php echo "$email";?>
    </p>
    <a href="Landing.php" class="btn btn-primary" name="Logout">Log out</a>

</div>
</div>
</div>      
<div style = "width: 59%; display: inline-block; ">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-registration-tab" data-bs-toggle="pill" data-bs-target="#pills-registration" type="button" role="tab" aria-controls="pills-registration" aria-selected="false">Registration</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          Home - We are only displaying courses for the next semester. Watch your email for updates on changes<br>
          coming soon.
        </div>
        <div class="tab-pane fade" id="pills-registration" role="tabpanel" aria-labelledby="pills-registration-tab">
         <h2> Registration </h2>

         <!--   ---------- ---     FORM  FORM  FORM   --- -----------  -->
         <form action="profile.php?a=enroll" method="POST">

         <table class="table table-responsive table-striped" >
                <thead>
                  <tr>
                    <th scope="col">#</th> 
                    <th scope="col"></th>
                    <th scope="col">Class Id</th>
                    <th scope="col">Professor</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td><input type = "checkbox"  name = "class[]" value = "1"></td>
                    <td>Cst499</td>
                    <td>Otto</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td><input type = "checkbox" name = "class[]" value = "2"></td>
                    <td>Mth202</td>
                    <td>Thornton</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td><input type = "checkbox" name = "class[]" value = "2"></td>
                    <td>Cst302</td>
                    <td>Correa</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td><input type = "checkbox" name = "class[]" value = "2"></td>
                    <td>Cpt301</td>
                    <td>Weatherfort</td>
                  </tr>                  
                    <th scope="row">5</th>
                    <td><input type = "checkbox" name = "class[]" value = "2"></td>
                    <td>Cpt3030</td>
                    <td>Liriano</td>
                  </tr>
                </tbody>
              </table>
                  <button type = "submit" class = "btn btn-success">Register</button> 
                </form>   
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
          Contact
        </div>
  </div>
</div>
  </div> 
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
