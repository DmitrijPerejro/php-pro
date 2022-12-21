<?php
  
  namespace Fabric;
  use Taxi\StandartTaxi;

  class StandartTaxiCreator extends Creator
  {
    public function getTaxi(): StandartTaxi {
      return new StandartTaxi;
    }
  }