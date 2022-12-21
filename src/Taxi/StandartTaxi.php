<?php
  namespace Taxi;

  class StandartTaxi implements Taxi {
    public function getModel(): string
    {
      return 'standart taxi';
    }
  
    public function getPrice(): int
    {
      return 200;
    }
  }