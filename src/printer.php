<?php
  
  function printer(\Exception $exception): void {
    echo "<pre>";
    echo "message: " . $exception->getMessage() . "\n";
    echo "line: " . $exception->getLine() . "\n";
    echo "file: " . $exception->getFile() . "\n";
    echo "</pre>";
  }