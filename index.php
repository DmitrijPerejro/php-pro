<?php
  
  require_once __DIR__ . '/vendor/autoload.php';
  
  use Fabric\EconomTaxiCreator;
  use Fabric\StandartTaxiCreator;
  use Fabric\LuxTaxiCreator;
  use Fabric\Creator
  use Taxi\Taxi;
  
  function getClientTaxi($type): Taxi {
    try {
      $creator = match ($type){
        'lux' => new LuxTaxiCreator(),
        'standart' => new StandartTaxiCreator(),
        'econom' => new EconomTaxiCreator(),
      };
    } catch (\UnhandledMatchError $err) {
      throw new Exception("type $type doesn't support");
    }
    
    return $creator->getTaxi();
  }
  
  try {
    $taxi = getClientTaxi('econom');
    var_dump($taxi->getModel());
    var_dump($taxi->getPrice());
  } catch (\Exception $err) {
    echo $err->getMessage();
  }
  
  // another method to call
  
  function getClientTaxi2(Creator $creator): Taxi {
    return  $creator->getTaxi();
  }
  
  getClientTaxi2(new EconomTaxiCreator);
  getClientTaxi2(new StandartTaxiCreator());
  getClientTaxi2(new LuxTaxiCreator());