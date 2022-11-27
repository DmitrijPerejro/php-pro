<?php
  require_once __DIR__ . '/vendor/autoload.php';
  require_once __DIR__ . '/src/printer.php';
  
  use Core\User;
  
  $user = new User(2, 'qwerty');
  var_dump($user->getUserData());
  
  try {
    $invalid1 = new User('2', 'qwe');
  } catch (\Exception $exception) {
    printer($exception);
  }
  
  try {
    $invalid2 = new User(2, 'qwertyuio');
  } catch (\Exception $exception) {
    printer($exception);
  }