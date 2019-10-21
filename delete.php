<?php
	$id = $_GET['id'];
	$con = mysqli_connect("localhost","root","","reg_db");
	$query = mysqli_query($con, "DELETE from details_tb where id=$id");
	include('users.php');
	mysqli_close($con);
?>