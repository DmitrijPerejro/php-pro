<?php
  namespace Taxi;

  class EconomTaxi implements Taxi {
    public function getModel(): string
    {
      return  'econom taxi';
    }
  
    public function getPrice(): int
    {
      return 100;
    }
  }