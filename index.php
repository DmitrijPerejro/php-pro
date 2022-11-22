<?php
  require_once __DIR__ . '/vendor/autoload.php';
  
  use Core\Color;
  
  $color1 = new Color(50, 100, 150);
  $color2 = new Color(75, 200, 250);
  $color3 = new Color(50, 100, 150);
  
  var_dump($color1->equals($color2));
  var_dump($color1->equals($color3));
  //always false
  var_dump($color1->strictEquals($color2));
  var_dump($color1->strictEquals($color3));
  
  $mixed = $color1->mix(new Color(50, 50, 50));
  $mr = $mixed->getRed();
  $mg = $mixed->getGreen();
  $mb = $mixed->getBlue();
  echo "<p style='color:rgb($mr, $mg, $mb);'>rgb($mr, $mg, $mb)</p>";
  echo "<hr>";
  $random = Color::random();
  $rr = $random->getRed();
  $rg = $random->getGreen();
  $rb = $random->getBlue();
  echo "<p style='color:rgb($rr, $rg, $rb);'>rgb($rr, $rg, $rb)</p>";
  
  try {
    $color1->setValues(256, 100, 100);
  } catch (\Exception $exception) {
    print_r($exception);
  }