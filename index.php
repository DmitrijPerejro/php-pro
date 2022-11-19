<?php
  try {
    $pdo = new PDO("pgsql:host=localhost;port=54320;dbname=test-data-base;user=root;password=root123;");
    var_dump('Success connection');
  } catch (PDOException $err) {
    var_dump($err);
  }