<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    echo "<table border='1'><br>";
	echo "<th><h3>Tabla del 3 </h3></th>";
	
	for($i=1;$i<=3;$i++){
		$valor=3*$i;
		echo "<tr>";
		echo "<td>3 X $i</td>";
		echo "<td>$valor</td>";
		echo "</tr>";
	}
	echo "<tr><td>Multiplicacion</td><td>Resultado</td></tr>";
	echo "</table>";

    ?>

</body>
</html>