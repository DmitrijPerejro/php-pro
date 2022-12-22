<?php
  namespace Builder;
  
  interface ContactBuilder {
    public function name(string $name): ContactBuilder;
    public function surname(string $surname): ContactBuilder;
    public function phone(string $phone): ContactBuilder;
    public function email(string $email): ContactBuilder;
    public function address(string $address): ContactBuilder;
    public function build(): array;
  }