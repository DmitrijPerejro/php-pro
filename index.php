<?php
  require_once __DIR__ . '/vendor/autoload.php';
  
  use Birds\Swallow;
  use Birds\Ostrich;
  
  $bird1 = new Swallow();
  $bird1->eat();
  $bird1->fly();
  
  $bird2 = new Ostrich();
  $bird2->eat();