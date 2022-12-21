<?php
  include_once __DIR__ . '/vendor/autoload.php';
  
  use Controllers\Controller;
  use DB\Mongo;
  use DB\Mysql;
  
  $controller1 = new Controller(new Mysql());
  $controller2 = new Controller(new Mongo());
  
  $controller1->getData();
  $controller2->getData();