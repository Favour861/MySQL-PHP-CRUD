<?php
	$_id=$_GET['id'];
	$user = $_GET['user'];
	$age = $_GET['userage'];
	$con = mysqli_connect("localhost","root","","reg_db");
	$us = mysqli_query($con, "UPDATE details_tb set name='$user', age='$age', id='$_id' where id='$_id'");
	include('users.php');

?>