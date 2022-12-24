<?php
  
  namespace TV;
  
  class Sony extends TV
  {
    public function __construct(int $diagonal)
    {
      parent::__construct($diagonal);
    }
    
    public function on(): void
    {
      // TODO: Implement on() method.
    }
    
    public function off(): void
    {
      // TODO: Implement off() method.
    }
  }