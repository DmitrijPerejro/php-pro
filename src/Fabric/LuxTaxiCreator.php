<?php
  
  namespace Fabric;
  use Taxi\LuxTaxi;

  class LuxTaxiCreator extends Creator
  {
    public function getTaxi(): LuxTaxi {
      return new LuxTaxi;
    }
  }