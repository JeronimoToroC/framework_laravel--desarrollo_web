<?php

namespace App\Models;

class DateCalculator
{
  private $startDate;
  private $endDate;

  public function __construct($startDate, $endDate)
  {
    $this->endDate = $endDate;
    $this->startDate = $startDate;
  }
  function getStartDate(): string
  {
    return $this->startDate;
  }
  function getEndDate(): string
  {
    return $this->endDate;
  }

  function daysDifference($startDate, $endDate)
  {
    $startDateTime = strtotime($startDate);
    $endDateTime = strtotime($endDate);

    $difference = abs($endDateTime - $startDateTime);

    $days = floor($difference / (60 * 60 * 24));

    return $days;
  }
}
