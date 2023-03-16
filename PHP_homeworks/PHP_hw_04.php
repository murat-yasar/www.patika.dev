<?php

abstract class Shape {
  public $width;
  public $height;
  public $shape;
  public $area;
  public $perimeter;

  // PRINT RESULT
  public function printResult() : void {
    echo "<h2>$this->shape</h2>";
    echo "Area: $this->area<br>";
    echo "Perimeter: $this->perimeter<hr>";
  }
}

class Rect extends Shape {
  public function calRec($width, $height){
    $width == $height ? $this->shape = 'Square:' : $this->shape = 'Rectangular:';  
    $this->area = $width*$height;
    $this->perimeter = 2 * ($width + $height);
    $this->printResult();
  }
}

class Square extends Rect {
  public function calSqr($length){
    $this->calRec($length, $length);
  }
}

class Triangle extends Shape {
  public function calTri($a, $b, $c){
    $this->shape = 'Triangle';
    $this->perimeter = $a + $b + $c;
    $this->area = sqrt(($a + $b + $c)*($a + $b)*($a + $c)*($b + $c));
    $this->printResult();
  }
}

$Rect = new Rect();
$Rect->calRec(5,10);

$Square = new Square();
$Square->calSqr(5);

$Triangle = new Triangle();
$Triangle->calTri(5,10,15);