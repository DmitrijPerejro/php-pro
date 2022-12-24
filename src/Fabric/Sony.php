<?php
  
  namespace Fabric;
  use TV\Sony as SonyTV;
  
  class Sony extends Fabric
  {
    public function makeLCD(int $diagonal): SonyTV
    {
      return new SonyTV($diagonal);
    }
    
    public function makeLED(int $diagonal): SonyTV
    {
      return new SonyTV($diagonal);
    }
  }