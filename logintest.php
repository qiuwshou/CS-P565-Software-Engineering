<?php

//set up mysql connection
$conn = mysqli_connect("localhost", "root", "","users") or die(mysql_error());
//select database
mysqli_select_db($conn, "users") or die(mysql_error());
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$qz = "SELECT username,password FROM userLogin where username='$username' and password='$password'" ; 
$result = mysqli_query($conn,$qz);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($count == 1) {
         header("Location: home.html");
      }else {
         echo "<script type=\"text/javascript\">
				alert(\"Your username or password is incorrect\");
				window.location = \"login.html\"
				</script>";	
		  
      }



?>