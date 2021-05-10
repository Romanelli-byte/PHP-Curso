<DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Tabuada </title>
	</head>
	<body>
	<?php
		$num = $_POST["num"];
		
		 echo "Tabuada do $num ";
		 echo "<table border=\"1\">";
		 
		for($i = 1 ; $i <=10; $i++)
		{
			echo "<tr>";
			$resultado = $num * $i;
			
			echo "<td>$num</td> <td> x </td> <td> $i  </td> <td> = </td> <td> $resultado </td>";
			echo "</tr>";
		}
	echo "</table>";
	?>
	</body>
</html>