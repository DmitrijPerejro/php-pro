<?php
  
  namespace Builder;
  
  class AdminBuilder implements ContactBuilder {
    
    private string $name;
    private string $surname;
    private string $phone;
    private string $email;
    private string $address;
    
    public function name(string $name): AdminBuilder
    {
      $this->name = "admin $name";
      
      return $this;
    }
    
    public function surname(string $surname): AdminBuilder
    {
      $this->surname = $surname;
      
      return $this;
    }
    
    public function phone(string $phone): AdminBuilder
    {
      $this->phone = $phone;
      
      return $this;
    }
    
    public function email(string $email): AdminBuilder
    {
      $this->email = "$email@admin.com";
      
      return $this;
    }
    
    public function address(string $address): AdminBuilder
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