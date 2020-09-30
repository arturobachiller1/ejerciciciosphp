<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

    $numero = 100;
    $contador = 0;
    echo "estos son los divisores: ";
    for($i = 1; $i <= $numero; $i++){
       
        if ($numero % $i == 0){
            $contador++;
            echo "$i ";
        } 
        

    }
    if($contador == 2){
        echo "Es un numero primo";
    }
?>

</body>
</html>