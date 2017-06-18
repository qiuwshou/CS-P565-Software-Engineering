<?php

error_reporting(1);

$target_dir = "C:\\xampp\\htdocs\\sahilkadam\\";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
 
$con=mysqli_connect("localhost","root","", "video");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 
 if (isset($_POST['up_form'])) {
    // All the above to insert the data into the script...
$video_name = $_POST['vname'];
$video_desc = $_POST['vdes'];
	 
$query = "INSERT INTO video_info(v_name, v_description, v_path)
					   VALUES ('{$video_name}', '{$video_desc}', '{$target_file}')";
					   
					   
if (mysqli_query($con, $query)) {
$message = "File Uploaded Successfully";
echo "<script type='text/javascript'>alert('$message');</script>";
}					   
					   
}

header("refresh:0; url=home.html");

mysqli_close($conn);

?>