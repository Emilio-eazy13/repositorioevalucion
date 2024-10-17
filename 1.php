<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
// Arreglo inicial de empleados y sus sueldos
$empleados = [
    ["nombre" => "mario", "sueldo" => 3000],
    ["nombre" => "Mamaría", "sueldo" => 2500],
    ["nombre" => "hayro", "sueldo" => 4000],
    ["nombre" => "noel", "sueldo" => 3200],
    ["nombre" => "Luis", "sueldo" => 2700]
];

// Ordenar el arreglo por sueldo
usort($empleados, function ($a, $b) {
    return $a['sueldo'] <=> $b['sueldo'];
});

// Imprimir empleados ordenados
echo "Empleados ordenados por sueldo:\n";
foreach ($empleados as $empleado) {
    echo "Nombre: " . $empleado['nombre'] . ", Sueldo: $" . $empleado['sueldo'] . "\n";
}

// Agregar 2 empleados nuevos
array_push($empleados, ["nombre" => "Clara", "sueldo" => 3500]);
array_push($empleados, ["nombre" => "Javier", "sueldo" => 4500]);

// Imprimir empleados después de agregar nuevos
echo "\nEmpleados después de agregar nuevos:\n";
foreach ($empleados as $empleado) {
    echo "Nombre: " . $empleado['nombre'] . ", Sueldo: $" . $empleado['sueldo'] . "\n";
}
?>


</body>
</html>