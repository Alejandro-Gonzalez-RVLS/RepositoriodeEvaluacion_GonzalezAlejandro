<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arreglo Empleados</title>
		<style type="text/css">
	body{
			background: black;
			text-align: center;
				font-size: 30px;
}
</style>
</head>
<body>
<?php
$Empleados = array(['Valeria', 'Sueldo' => rand(2500,7500), 
'nombre' => 'Lucas', 'Sueldo' => rand(2500,7500), 
'nombre' => 'Sofía', 'Sueldo' => rand(2500,7500), 
'nombre' => 'Diego', 'Sueldo' => rand(2500,7500), 
'nombre' => 'Mariana', 'Sueldo' => rand(2500,7500)]);

echo "Empleados (orden normal):<br>";
foreach ($Empleados as $Empleado => $Sueldo) {
	echo "Empleado y Sueldo: $Empleado: $$Sueldo <br>";
}

echo "<p>";

arsort($Empleados);
echo "Empleados (Orden mayor-menor)<br>";
foreach ($Empleados as $Empleado => $Sueldo) {
	echo "Empleado y Sueldo: $Empleado: $$Sueldo <br>";
}

echo "<p>";

asort($Empleados);
echo "Empleados (Orden menor-mayor)<br>";
foreach ($Empleados as $Empleado => $Sueldo) {
	echo "Empleado y Sueldo: $Empleado: $$Sueldo <br>";
}

echo "<p>";
echo "____________________________________________________________________________________<br>";
echo "<p>";

$Empleados += [ "Jorge" => rand(2500, 8000) ];
$Empleados += [ "Ana" => rand(2500, 8000) ];
$Empleados += [ "Adrian" => rand(2500, 8000) ];

echo "<p>";
echo "Empleados (orden normal+empleados):<br>";
foreach ($Empleados as $Empleado => $Sueldo) {
	echo "Empleado y Sueldo: $Empleado: $$Sueldo <br>";
}

echo "<p>";

arsort($Empleados);
echo "Empleados (Orden mayor-menor+empleados)<br>";
foreach ($Empleados as $Empleado => $Sueldo) {
	echo "Empleado y Sueldo: $Empleado: $$Sueldo <br>";
}

echo "<p>";

asort($Empleados);
echo "Empleados (Orden menor-mayor+empleados)<br>";
foreach ($Empleados as $Empleado => $Sueldo) {
	echo "Empleado y Sueldo: $Empleado: $$Sueldo <br>";
}
?>
</body>
</html>