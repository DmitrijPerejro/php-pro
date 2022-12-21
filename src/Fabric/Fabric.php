<?php
  namespace Fabric;
  use TV\TV;
  
  abstract class Fabric
  {
    abstract public function makeLED(int $diagonal): TV;
    abstract public function makeLCD(int $diagonal): TV;
  }