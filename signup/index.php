
<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); 
?>

<html>
<head>	
	<title>Display data in table with edit button </title>
</head>

<body>
<a href="add.html">Add New Data</a><br><br>

	<table width='50%'height='15%' border='0'>

	<tr bgcolor='yellow'>
		<td>Name</td>
		<td>Age</td>
		<td>Email</td>
		<td>Update</td>	
	</tr>
	<?php 
	
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td bgcolor=''>".$res['name']."</td>";
		echo "<td>".$res['age']."</td>";
		echo "<td>".$res['email']."</td>";	
echo "<td bgcolor='green'><a href='edit.php?id=$res[id]'><font color='white'>Edit</a>";         
	}
	?>
	</table>
</body>
</html>