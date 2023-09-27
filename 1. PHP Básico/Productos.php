<?php
$productos = [
  "computador" => [
    "nombre" => "HP-Victus",
    "precio" => 4200000,
    "detalles" => [
      "disponibilidad" => true,
      "reseñas" => ["Excelente", "Buen rendimiento"]
    ]
  ],
  "celular" => [
    "nombre" => "iPhone 10",
    "precio" => 2200000,
    "detalles" => [
      "disponibilidad" => false,
      "reseñas" => []
    ]
  ],
  "tv" => [
    "nombre" => "LG-200x",
    "precio" => 3000000,
    "detalles" => [
      "disponibilidad" => true,
      "reseñas" => ["Buena relación calidad-precio"]
    ]
  ]
];

foreach ($productos as $producto) {
  if ($producto["detalles"]["disponibilidad"]) {
    echo "Nombre del Producto: " . $producto["nombre"] . ", Precio: $" . $producto["precio"] . "\n";
  }
}
