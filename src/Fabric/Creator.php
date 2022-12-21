<?php
  
  namespace Fabric;
  use Taxi\Taxi;
  
  abstract class Creator {
    abstract public function getTaxi(): Taxi;
  }
  
  
  