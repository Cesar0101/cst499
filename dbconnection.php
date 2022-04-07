<?php
session_start();


//database connection
$dbhw= "localhost";       //local server is being used
$dbEmployees = "root";     
$dbPassword = "";       //no password needed for xampp
$dbName = "cst499";     //name of database


//create a connection
$conn = new mysqli($dbhw, $dbEmployees, $dbPassword, $dbName);

// Check connection
if (!$conn) {      
die("Connection failed: " . mysqli_connect_error());
}

//RECEIVE A VARIABLE FROM THE REGISTER OPTION ON THE LANDING PAGE
$a = $_REQUEST['a'];

if($a=='registration'){
  $fname    =   $_POST['fname'];
  $lname   =   $_POST['lname'];
  $phone   =   $_POST['phone'];
  $ssn   =   $_POST['ssn'];
  $email   =   $_POST['email'];
  $password   =   $_POST['password']; 

                //USAGE OF THE SESSION TO STORE DATA LOG IN DATA ACROSS PAGES
            $_SESSION['fname'] = $_POST['fname'];
            $fname = $_SESSION['fname']; //PLACE SESSION INFO IN VARIABLE EX. $fname card display (profile.php)
            $_SESSION['lname'] = $_POST['lname'];
            $lname = $_SESSION['lname'];    
            $_SESSION['phone'] = $_POST['phone'];
            $phone = $_SESSION['phone'];
            $_SESSION['ssn'] = $_POST['ssn'];
            $phone = $_SESSION['ssn'];


  $sql = "INSERT INTO student_info (fname,lname,phone,ssn,email,password)
  VALUES ('$fname','$lname','$phone','$ssn','$email','$password')";
  $result = $conn->query($sql);


            $sql = "INSERT INTO student (email,password)
            VALUES ('$email','$password')";
            $result = $conn->query($sql);


if ($conn->query($sql) === TRUE) {


echo "Registered Successfully as " . $email;
} else {


echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
}


//RECEIVE A VARIABLE FROM THE LOG IN OPTION ON LANDING PAGE
if($a== 'login'){ 


$email    =   $_POST['email'];


$password   =   $_POST['password'];


$_SESSION['email'] = $_POST['email'];


$email = $_SESSION['email'];   

// if (!isset($_SESSION[$email]))
// {
//       header('Location: Landing.php');
//     }else{
//       header('Location:profile.php');
//     }
//      exit;

$sql = "INSERT INTO student (`email`,`password`)  
VALUES ('$email' , '$password')";   //sends data to my table called users in database called cst499

if ($conn->query($sql) === TRUE) {   


echo "New record created successfully ";
} else {


echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
}




//LOG OUT
if(isset($_POST['Logout'])){


global $email;
unset($email);
}



//----- SELECT THE COURSES FROM THE TABLE ----//
if($a== 'enroll'){


$class = $_POST["class"];


$sql = "INSERT INTO enrolled_in (class,email) 
VALUES ('$email' , '$password')";    


if ($conn->query($sql) === TRUE) {
echo "New record created successfully ";


} else {
echo "Error: " . $sql . "<br>" . $conn->error;


}
$conn->close();
}
