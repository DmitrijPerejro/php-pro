<?php
  namespace Birds;
  
  interface BirdInterface {
    public function eat(): void;
  }
  
  interface FlyBirdInterface {
    public function fly(): void;
  }