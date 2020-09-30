<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

   $array[] = "España";
   $array[2] = "Francia";
   $array[1] = "Alemania";
   $array[] = "Polonia";



   foreach ($array as $elemento){

    echo "$elemento ";

   }
   
   echo "<pre>";
   print_r($array);
   echo "</pre>";


?>

</body>
</html>