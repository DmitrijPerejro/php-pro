<?php
  
  namespace Builder;
  
  class UserBuilder implements ContactBuilder {
    
    private string $name;
    private string $surname;
    private string $phone;
    private string $email;
    private string $address;
    
    public function name(string $name): UserBuilder
    {
      $this->name = $name;
      
      return $this;
    }
    
    public function surname(string $surname): UserBuilder
    {
      $this->surname = $surname;
      
      return $this;
    }
  
    public function phone(string $phone): UserBuilder
    {
      $this->phone = $phone;
    
      return $this;
    }
  
    public function email(string $email): UserBuilder
    {
      $this->email = $email;
    
      return $this;
    }
  
    public function address(string $address): UserBuilder
    {
      $this->address = $address;
    
      return $this;
    }
    
    public function build(): array
    {
      return [
        'name' => $this->name,
        'surname' => $this->surname,
        'phone' => $this->phone,
        'email' => $this->email,
        'address' => $this->address,
      ];
    }
  }