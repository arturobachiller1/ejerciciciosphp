<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio15</title>
</head><body>
    <h2>Formulario</h2>
    <form method="post" action="">
        <label>Nombre 1</label><input type="text" value="" name="nombre[]"> <br>
        <label>Nombre 2</label><input type="text" value="" name="nombre[]"> <br>
        <label>Nombre 3</label><input type="text" value="" name="nombre[]"> <br>
        <input type="submit" value="enviar">
    </form>
    
    <?php

    if(isset($_POST) && !empty($_POST)){
        echo "<ul>";
       foreach($_POST["nombre"] as $elemento){
           echo "<li> $elemento </li>";
       }
       echo "</ul>";
    }
     else {
         echo "Todavía no hemos recibido nada!";
    }
    ?>
</body></html>