<!Doctype html>
<html>
<head>
	<title>USERS</title>
	<meta charset="utf-8">
</head>
	<script src="jquery3.3.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#s, #i').keyup(function(){
				$.post("search.php",{search: $("#s").val(), search2: $("#i").val()},function(data){
					$('#demo').html(data);
				});
			});
		
		});
	</script>

<body>
	<table style='color: green; border: 2px solid unset; text-align: center; font-size: 15pt; border-collapse: collapse; font-family: segoe UI; text-align: center' border='1' width='100%'>
		<tr style='background: green; color: white;'>
			<td></td>
			<td><input type='search' placeholder='search by name' id='s' style="height: 30px; border-style: none; border: 1px solid blue; border-radius: 5px; padding-left: 10px; font-size: 15pt;"></td>
			<td><input type='search' placeholder='search by id' id='i' style="height: 30px; border-style: none; border: 1px solid blue; border-radius: 5px; padding-left: 10px; font-size: 15pt; margin-left: 20px"></td>
			<td></td>
		</tr>
		<tr style='background: green; color: white;'>
			<th>SERIAL NUMBER</th>
			<th>USERNAME</th>
			<th>AGE</th>
			<th>Edit/Delete</th>
		</tr>
		<tbody id="demo">
	<?php
		
	$con = mysqli_connect("localhost","root","","reg_db");
	$us = mysqli_query($con, "SELECT * from details_tb order by id");
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