<?php 
	$useridedit=$_GET['id'];
	$usernameedit=$_GET['user_name'];
	$userageedit=$_GET['user_age'];
	 
	echo "<form action='edit.php' method=get><div style='margin: 5% auto; width: 30%; background: orange; font-family: Segoe UI; text-align: center'><h1 style='background: #081F2C; color: white'>Edit the inputs here</h1><label>Id</label><br><input name='id' value='$useridedit' style='width: 80%; height: 30px; border-style: none; border-radius: 5px; border: 1px solid grey'><br><label>Username</label><br><input name='user' value='$usernameedit' style='width: 80%; height: 30px; border-style: none; border-radius: 5px; border: 1px solid grey'><br><label>Age</label><br><input name='userage' value='$userageedit' style='width: 80%; height: 30px; border-style: none; border-radius: 5px; border: 1px solid grey'><br><br><button style='width: 100%; height: 50px; background: #081F2C; color: white; border-style: none; font-size: 20pt' type=submit>SUBMIT</button></div></form>";

?>