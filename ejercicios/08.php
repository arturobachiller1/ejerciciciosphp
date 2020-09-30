<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

$array[]="Kobe";
$array[]="CR7";
$array[6]="Lebron";
$array[200]="Curry";
$array[]="Rondo";
foreach($array as $elemento){
    echo "$elemento ";
}
    echo "<br>";
    echo "<pre>";
    print_r($array);
    echo "</pre>";
?>

</body>
</html>