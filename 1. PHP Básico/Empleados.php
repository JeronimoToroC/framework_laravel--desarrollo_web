<?php
$empleados = [
  "Juan" => [
    "salario" => 50000,
    "fecha_contratacion" => "2021-03-15",
    "departamento" => "Ventas"
  ],
  "Pedro" => [
    "salario" => 60000,
    "fecha_contratacion" => "2020-06-20",
    "departamento" => "Recursos Humanos"
  ],
  "Carlos" => [
    "salario" => 55000,
    "fecha_contratacion" => "2019-12-10",
    "departamento" => "Contabilidad"
  ]
];

foreach ($empleados as $nombre => $info) {
  $salario = $info["salario"];
  echo "Empleado: $nombre, Salario: $salario\n";
}
