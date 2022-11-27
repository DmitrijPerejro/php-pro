<?php
  require_once __DIR__ . '/vendor/autoload.php';
  
  $test = new \Core\Test();
  $res = $test->getSum();
  var_dump($res);
  