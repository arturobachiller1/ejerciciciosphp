<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

    $fibo = 0;
    $fibo2 = 1;
    $fibo3 = 0;
    for($i=1;$i<=10;$i++){

        $fibo3 = $fibo1 + $fibo2;
        echo "$fibo3, $fibo, $fibo2";
        $fibo = $fibo2 + $fibo3;
        $fibo2 = $fibo3 + $fibo;
       
    }


?>

</body>
</html>