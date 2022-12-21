<?php
  
  require_once __DIR__ . '/vendor/autoload.php';
  
  use Fabric\Fabric;
  use TV\TV;
  use Fabric\Sony as SonyFabric;
  use Fabric\LG as LGFabric;
  
  /*
   * Array<TV>
   */
  function clientCode(Fabric $fabric, int $size): array{
    return [
      'LCD' => $fabric->makeLCD($size),
      'LED' => $fabric->makeLED($size),
    ];
  }
  
  $sony = clientCode(new SonyFabric(), 50);
  $lg = clientCode(new LGFabric(), 57);
  