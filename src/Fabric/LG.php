<?php
  
  namespace Fabric;
  use TV\LG as LGTV;
 
  class LG extends Fabric
  {
    public function makeLCD(int $diagonal): LGTV {
      return new LGTV($diagonal);
    }
    
    public function makeLED(int $diagonal): LGTV
    {
      return new LGTV($diagonal);
    }
  }