<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

    $numero1 = 0;
    $numero2 = 1;    


    for($i=1; $i <= 10;$ii++){
        $fibonacci = $numero1 + $numero2;
        echo "$fibonacci<br>";
        $numero1 = $numero2;
        $numero2 = $fibonacci;

    }

?>

</body>
</html>