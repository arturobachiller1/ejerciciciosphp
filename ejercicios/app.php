<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio13</title>
</head><body>
<?php

class Persona  
{
  public $numero;

  public function __construct($numero)
  {
    $this->numero = $numero;

  }
  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'index';
    }
    $this->$method();
  }

  public function fibonacci()
  {
    $variable1 = 0;
    $variable2 = 1;
    $fibonacci[0] = $variable1;
    $fibonacci[1] = $variable2;

    for($i=2;$i<= 1000000;$i++){
        $variable3 = $variable1 + $variable2;
        $fibonacci[$i] = $variable3;
        $variable1 = $variable2;
        $variable2 = $variable3;
    }
    include('views/fibonacci.php');
  }

  public function potencias2(){
      $variable[0] = 2;
    for($i=1;$i<= 24;$i++){
      $variable[$i] = $variable[0] * 2;
    }
    include('views/potencias2.php');

  }
  public function factorial(){
    $variable1 = 50;
    $factorial[0] = 1;
    for ($i = 1 ; $i<= $variable1; $i++){
        $factorial[$i] = $factorial[$i] * $i;
    }
    include('views/factorial.php');

  }

  public function primos(){
    $primos[0] = 1;
    for ($i = 1; $i<= 10000; $i++){
        if (10000 % $i == 0){
            echo "El numero " . $i . " es primo";
        }
    }
    include('views/primos.php');

    }

  public function __toString()
  {
    return $this->nombre;
  }
}?>
</body></html>