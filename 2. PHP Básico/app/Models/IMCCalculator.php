<?php

namespace App\Models;

// Calcular el IMC
class IMCCalculator extends User
{
  private $weight;
  private $height;

  public function __construct(int $weight, int $height, string $name, string $lastname)
  {
    parent::__construct($name, $lastname);
    $this->weight = $weight;
    $this->height = $height;
  }

  public function calculate()
  {
    $imc = $this->weight / ($this->height * $this->height);
    return $imc;
  }
}
