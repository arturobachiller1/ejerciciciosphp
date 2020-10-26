<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio13</title>
</head><body>
<?php

class app  
{

  public function run()
  {
    if(isset($_GET['method'])){
      $method = $_GET['method'];
    }else{
      $method = 'index';
    }
    $this-> $method();
  }
  public function index(){
    include('views/index.php');
  }

  public function fibonacci()
  {
 
    $fibonacci[] = 0;
    $variable1 = 0;
    $variable2 = 1;
    $variable3 = 0;
    while ($variable3 < 1000000){
        $variable3 = $variable1 + $variable2;
        $fibonacci[] = $variable3;
        $variable1 = $variable2;
        $variable2 = $variable3;
    }

    require("views/fibonacci.php");

  }
  public function potencias2(){
    $potencias[0] = 2;
    $numero = 2;
    $numeroaux = 0;
  for($i=1;$i<= 24;$i++){
    $numeroaux = $numero * 2;
    $numero = $numeroaux;
    $potencias[] = $numeroaux;
  }
    require('views/potencias2.php');

}

public function factorial(){
  $numero = 10;
  $factorial1 = 1;
  $factorial[0] = 1;
 while ($numero != 0){
  $factorial1 = $factorial1 * $numero;
  $numero--;
 }
  require('views/factorial.php');

}

public function primos(){
  $primos[0] = 1;
  for ($i = 1; $i<= 10000; $i++){
      if (10000 % $i == 0){
          echo "El numero " . $i . " es primo";
      }
  }
  include('views/primos.php');
// preguntar si es el primo de un numero aleatorio o el primo de 10000
  }
}?>
</body></html>