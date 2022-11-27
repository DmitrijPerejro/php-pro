<?php
  namespace Exceptions;
  use Exception;
  
  class Error extends Exception {
    public function print() {
      echo "<details style='background-color: aliceblue; padding: 10px'>";
      echo "<summary>";
      echo "File: " . $this->getFile() . " (line: " . $this->getLine() . ")" . "\n";
      echo "</summary>";
      echo "<pre style='color: red'>";
      echo "<hr>";
      echo "Message: " . $this->getMessage() . "\n";
      echo "Line: " . $this->getLine() . "\n";
      echo "Code: " . $this->getCode() . "\n";
      var_dump($this->getTrace());
      echo "</pre>";
      echo "</details>";
    }
  }