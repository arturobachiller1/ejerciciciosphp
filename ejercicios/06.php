<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

    $array = ["Kobe","James", "Davies", "Rondo", "CR7"];
    echo "<ul>";
    foreach ($array as $element){
        echo "<li>" . $element . '</li>';
    }
    echo "</ul>";
    
    echo "<ul>";
    print_r($array); 
    echo "</ul>";

?>

</body>
</html>