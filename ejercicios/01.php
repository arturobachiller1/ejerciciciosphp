<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

$nombre = "Arturo";
$apellidos = "bachiller";
$edad = "20";
$telefono = "789789789";
$email = "bachiller.arturo.smr@gmail.com";

echo "<table border=1>";
echo "<tr>";
echo "<th> nombre </th>";
echo "<th> apellidos </th>";
echo "<th> edad </th>";
echo "<th> telefono </th>";
echo "<th> email </th>";
echo "</tr>";
echo "<tr>";
echo "<td> " . $nombre . "</td>";
echo "<td> " . $apellidos . "</td>";
echo "<td> " . $edad . "</td>";
echo "<td> " . $telefono . "</td>";
echo "<td> " . $nombre . "</td>";
echo "</tr>";
echo "</table>";
?>

</body>
</html>