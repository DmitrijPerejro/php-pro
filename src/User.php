<?php
  namespace Core;
  
  class User {
    private int $id;
    private string $password;
    
    public function __construct($id, $password)
    {
      $this->setId($id);
      $this->setPassword($password);
    }
  
    /**
     * @return int
     */
    public function getId(): int
    {
      return $this->id;
    }
  
    /**
     * @param int $id
     */
    public function setId($id): void
    {
      $this->idValidator($id);
      $this->id = $id;
    }
  
    /**
     * @return string
     */
    public function getPassword(): string
    {
      return $this->password;
    }
  
    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
      $this->passwordValidator($password);
      $this->password = $password;
    }
   
    public function getUserData(): array {
      return [
        'id' => $this->getId(),
        'password' => $this->getPassword()
      ];
    }
    
    private function idValidator($input): void {
      if (gettype($input) !== 'integer') {
        $incomingType = gettype($input);
        throw new \Exception(
          "Incoming type $input ($incomingType) is not valid"
        );
      }
    }
  
    private function passwordValidator(string $input): void {
      $max = 8;
      if (mb_strlen($input) > $max) {
        throw new \Exception(
          "Incoming value $input should be less then $max symbols"
        );
      }
    }
  }