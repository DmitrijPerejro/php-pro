<?php
  namespace Core;
  
  class Color
  {
    private int $red;
    private int $green;
    private int $blue;
    private static int $minColorValue = 0;
    private static int $maxColorValue = 255;
  
    /**
     * @param int $r
     * @param int $g
     * @param int $b
     */
    public function __construct(int $r, int $g, int $b)
    {
      $this->red = $r;
      $this->green = $g;
      $this->blue = $b;
    }
  
    /**
     * @return int
     */
    public function getRed(): int
    {
      return $this->red;
    }
  
    /**
     * @param int $r
     */
    private function setRed(int $r): void
    {
      $this->rangeGuard($r);
      $this->red = $r;
    }
  
    /**
     * @return int
     */
    public function getGreen(): int
    {
      return $this->green;
    }
  
    /**
     * @param int $g
     */
    private function setGreen(int $g): void
    {
      $this->rangeGuard($g);
      $this->green = $g;
    }
  
    /**
     * @return int
     */
    public function getBlue(): int
    {
      return $this->blue;
    }
  
    /**
     * @param int $b
     */
    private function setBlue(int $b): void
    {
      $this->rangeGuard($b);
      $this->blue = $b;
    }
  
    /**
     * @param int $color
     * @return void
     * @throws \Exception
     */
    private function rangeGuard(int $color): void {
      if ($color < self::$minColorValue || $color > self::$maxColorValue) {
        throw new \Exception("Color $color is out of range");
      }
    }
  
    /**
     * @return Color
     */
    public static function random(): Color {
      return new Color(self::makeRandom(), self::makeRandom(), self::makeRandom());
    }
  
    /**
     * @return int
     */
    private static function makeRandom(): int {
      return rand(self::$minColorValue, self::$maxColorValue);
    }
  
    /**
     * @param Color $incomingColor
     * @return Color
     */
    public function mix(Color $incomingColor): Color {
      return new Color(
        ($this->getRed() + $incomingColor->getRed()) / 2,
        ($this->getGreen() + $incomingColor->getGreen()) / 2,
        ($this->getBlue() + $incomingColor->getBlue()) / 2,
      );
    }
  
    /**
     * @param int $r
     * @param int $g
     * @param int $b
     * @return void
     */
    public function setValues(int $r, int $g, int $b): void {
      $this->setRed($r);
      $this->setGreen($g);
      $this->setBlue($b);
    }
  
    /**
     * @param Color $incomingColor
     * @return bool
     */
    public function equals(Color $incomingColor): bool {
      return $this == $incomingColor;
    }
  
    /**
     * @param Color $incomingColor
     * @return bool
     */
    public function strictEquals(Color $incomingColor): bool {
      return $this === $incomingColor;
    }
  }