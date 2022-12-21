<?php
  
  namespace Fabric;
  use Taxi\EconomTaxi;

  class EconomTaxiCreator extends Creator
  {
    public function getTaxi(): EconomTaxi {
      return new EconomTaxi;
    }
  }