<?php
  try {
    $pdo = new PDO("pgsql:host=postgres;port=54320;dbname=test-data-base;user=root;password=root123");
    var_dump('Success connection');
  } catch (PDOException $err) {
    echo "<pre>";
    print_r($err);
    echo "</pre>";
  }