  <?php

  function factorial($numero) {
    $resultado = 1;
    for ($i=1; $i <= $numero; $i++) { 
      $resultado = $resultado * $i;
    }
    return $resultado;
  }
  echo "El factorial de 5 es " . factorial(5);
  echo "<br>";
  echo "Y el factorial de 10 es " . factorial(10);
  ?>