<?php
	$first = $_GET['fn'];
	$pass = $_GET['pwd'];
	$age =$_GET['age'];

	if($age<18){
		echo "<h1 style='text-align:center; color: red'>Sorry" . " ". $first . "<br>". "Your registration is unsuccessful". "</h1>";
	}
	else{
		echo "<h1 style='text-align:center; color: green'>Congratulation" . " ". $first . "<br>". "Your registration is successful". "</h1>";
		$connection = mysqli_connect("localhost","root","","reg_db");
		$insert = mysqli_query($connection, "INSERT into details_tb (name,password,age) values ('$first','$pass','$age')");
	}
	
?>