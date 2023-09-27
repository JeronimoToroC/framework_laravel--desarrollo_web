<?php
$estudiantes = [
  "Juan" => [
    "matematicas" => 4.5,
    "español" => 3.2,
    "ciencias" => 4.8
  ],
  "Maria" => [
    "matematicas" => 3.7,
    "español" => 4.8,
    "ciencias" => 4.4
  ],
  "Carlos" => [
    "matematicas" => 4.2,
    "español" => 4.5,
    "ciencias" => 4.9
  ],
  "Ana" => [
    "matematicas" => 4.9,
    "español" => 4.0,
    "ciencias" => 4.7
  ],
];

$promedios = [];
foreach ($estudiantes as $nombre => $calificaciones) {
  $promedio = array_sum($calificaciones) / count($calificaciones);
  $promedios[$nombre] = number_format($promedio, 1);
}

$mejorEstudiante = "";
$mejorPromedio = 0;
foreach ($promedios as $nombre => $promedio) {
  if ($promedio > $mejorPromedio) {
    $mejorEstudiante = $nombre;
    $mejorPromedio = $promedio;
  }
}

echo "El estudiante con el promedio más alto es: $mejorEstudiante\n";
echo "Promedio: $mejorPromedio\n";
