<?php 
	require('db.php');
    $username=$_SESSION['username'];
	$id=$_GET['username'];
	$query = "DELETE FROM employee WHERE fname="; 
	$result = mysqli_query($conn,$query) or die ( mysqli_error());
	header("Location: dinesh.php"); 
 ?>