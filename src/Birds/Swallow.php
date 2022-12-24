<?php
  namespace Birds;
  
  use Birds\BirdInterface;
  use Birds\FlyBirdInterface;
  
  class Swallow implements BirdInterface, FlyBirdInterface {
    public function eat(): void
    {
      // TODO: Implement eat() method.
    }
    
    public function fly(): void
    {
      // TODO: Implement fly() method.
    }
  }