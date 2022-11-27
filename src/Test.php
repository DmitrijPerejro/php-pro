<?php
  namespace Core;
  use Traits\Trait1;
  use Traits\Trait2;
  use Traits\Trait3;
  
  class Test
  {
    use Trait1, Trait2, Trait3 {
      Trait1::test insteadof Trait2;
      Trait2::test insteadof Trait3;
      Trait1::test as test1;
      Trait2::test as test2;
      Trait3::test as test3;
    }
    
    public function getSum(): int {
      return $this->test1() + $this->test2() + $this->test3();
    }
  }