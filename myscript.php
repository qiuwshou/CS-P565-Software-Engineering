<?php
//set up mysql connection
$conn = mysqli_connect("localhost", "root", "") or die(mysql_error());
if (!$conn) {
    echo "Not connected to server";
}else{
echo "Connected successfully to server";
}
//select database
if (!mysqli_select_db($conn, "users")) {
    echo "Not connected to database";
}
if (isset($_POST['sub_form'])) {
    // All the above to insert the data into the script...
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$emailid = $_POST['emailsignup'];
$password = $_POST['passwordsignup'];
$con_password = $_POST['passwordsignup_confirm'];
$dob = $_POST['dob'];
/*$gender = $_POST['gender'];*/
	 
	 
$query = "INSERT INTO user_info(first_name, last_name, emailid, password, dob)
					   VALUES ('{$first_name}', '{$last_name}', '{$emailid}', '{$password}', '{$dob}')";
}
/*	 
if (mysqli_query($conn, $query)) {
	   
echo "<script type=\"text/javascript\">
alert(\"New member added successfully.\");
window.location = \"myscript.php\"
</script>";	   
} else{
die("Failed: " . mysql_error());
}*/
echo "<script type=\"text/javascript\">
alert(\"New member added successfully.\");
window.location = \"login.html\"
</script>";	 

header("refresh:2; url=sahilkadam/login.html");

mysqli_close($conn);
?>				