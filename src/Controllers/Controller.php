<?php
  namespace Controllers;
  use DB;
  
  class Controller {
    private  DB\DataBaseInterface $adapter;
    
    public function __construct(DB\DataBaseInterface $adapter)
    {
      $this->adapter = $adapter;
    }
    
    public function getData() {
      $this->adapter->getData();
    }
  }