<?php
  
  require_once __DIR__ . '/vendor/autoload.php';
  
  use Builder\ContactBuilder;
  use Builder\UserBuilder;
  use Builder\AdminBuilder;
  
  function userClientMaker(ContactBuilder $builder): array {
    return $builder
      ->name('Valera')
      ->surname('Ololo')
      ->email('ololo@gnail.com')
      ->phone('050-555-55-55')
      ->address('Ukraine')
      ->build();
  }
  
  function adminClientMaker(ContactBuilder $builder): array {
    return $builder
      ->name('Valera')
      ->surname('Ololo')
      ->email('admin')
      ->phone('050-555-55-55')
      ->address('Ukraine')
      ->build();
  }
  
  $user = userClientMaker(new UserBuilder());
  $admin = adminClientMaker(new AdminBuilder());