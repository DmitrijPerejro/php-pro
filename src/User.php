<?php
  namespace Core;
  use Exceptions\Error;
  
  class User
  {
    private string $name;
    private int $age;
    private string $email;
    
    public function __construct(string $name, int $age, string $email)
    {
      $this->setName($name);
      $this->setAge($age);
      $this->email = $email;
    }
    
    public function __call(string $name, array $arguments)
    {
      if (!method_exists($this, $name)) {
        throw new Error("Method <b>$name</b> doesn't exists");
      }
    }
  
    /**
     * @return string
     */
    public function getName(): string
    {
      return $this->name;
    }
  
    /**
     * @param string $name
     */
    private function setName(string $name): void
    {
      $this->name = $name;
    }
  
    /**
     * @return int
     */
    public function getAge(): int
    {
      return $this->age;
    }
  
    /**
     * @param int $age
     */
    private function setAge(int $age): void
    {
      $this->age = $age;
    }
  
    /**
     * @return string
     */
    public function getEmail(): string
    {
      return $this->email;
    }
  
    public function getAll(): array {
      return [
        'name' => $this->getName(),
        'age' => $this->getAge(),
        'email' => $this->getEmail(),
      ];
    }
    
  }