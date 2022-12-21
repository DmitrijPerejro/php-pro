<?php
  namespace Taxi;
  
  class LuxTaxi implements Taxi {
    public function getModel(): string
    {
      return 'lux taxi';
    }
    
    public function getPrice(): int
    {
      return 300;
    }
  }