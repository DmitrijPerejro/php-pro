<?php
  namespace TV;
  
  abstract class TV
  {
    private int $diagonal;
    
    public function __construct(int $diagonal)
    {
      $this->diagonal = $diagonal;
    }
    
    public function getSize(): int {
      return $this->diagonal;
    }
    
    abstract public function on(): void;
    abstract public function off(): void;
  }