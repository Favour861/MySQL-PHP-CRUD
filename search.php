<!Doctype HTML>
<html>
	<title>USERS</title>

<body>
	<?php
	$searchval = $_POST['search'];
	$searchval2 = $_POST['search2'];
	$con = mysqli_connect("localhost","root","","reg_db");
	if($searchval==""){
	$us = mysqli_query($con, "SELECT * from details_tb where id like '$searchval2%'");
	}
	else if($searchval2==""){
		$us = mysqli_query($con, "SELECT * from details_tb where name like '$searchval%'");
	}
	else {
		$us = mysqli_query($con, "SELECT * from details_tb where name like '$searchval%' and id like '$searchval2%'");
	}



	while($u=mysqli_fetch_array($us))
	{
		$num = $u['id'];
		$uname = $u['name'];
		$age = $u['age'];
		echo "<tr><td>".$num."</td><td>".$uname ."</td><td>". $age."</td><td><a href='editpage.php?id=".$num."&user_name=".$uname."&user_age=".$age."'><img src='pen.png' style='transform: scale(0.5,0.5); vertical-align: middle; cursor: pointer; -moz-user-select: none; user-select: none'></a><a href='delete.php?id=".$num."'><img src='trash.png' style='transform: scale(0.5,0.5); vertical-align: middle; cursor: pointer; -moz-user-select: none; user-select: none'></a></td></tr>";
	}
		echo "</tbody></table>";

	// echo "<script>
	// function ins(){
	// 	'".mysqli_query($con, "UPDATE details_tb SET 'name'='nname.value' WHERE 'id'='".$num."'")."';
	// 	'".mysqli_query($con, "UPDATE details_tb SET 'age'='nage.value' WHERE 'id'='".$num."'")."';
	// }
	// </script>";

?>
</body>
</html>