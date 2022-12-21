<?php
  
  namespace Taxi;
  
  interface Taxi {
    public function getModel(): string;
    public function getPrice(): int;
  }
  