<?php
  namespace DB;
  
  interface DataBaseInterface {
    public function save(): void;
    public function read(): array;
    public function getData(): array;
  }