<?php
  namespace Errors;
  use Exception;
  
  class Error extends Exception {
    public function print() {
      echo "<pre style='background-color: aliceblue'>";
      echo $this->getMessage();
      echo "</pre>";
    }
  }