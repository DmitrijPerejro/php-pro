<?php
  require_once __DIR__ . '/vendor/autoload.php';
  
  use Core\User;
  use Exceptions\Error;
  
  try {
    $user = new User('Perejro', 10, 'a@gmail.com');
    $user->setEmail('s@gmail.com');
  } catch (Error $error) {
    $error->print();
  }
  