<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio12</title>
</head><body>
    <h2>Formulario</h2>
    <form method="post" action="">
        <label>operando1</label><input type="text" value="" name="operando1"> <br>
        <label> operando2</label><input type="text" value="" name="operando2"> <br>
        <input type="submit" value="enviar"><br>
        Elige una operacion: <br>

        <select name="operacion">
         <optgroup label="operacion">
           <option>suma</option>
           <option>resta</option>
           <option>multiplicacion</option>
           <option>division</option>
         </optgroup>
       </select>
    </form>
    
    <?php
    
   
    if(isset($_POST) && !empty($_POST) && $_POST["operacion"] == 'suma'){
        $suma = $_POST["operando1"] + $_POST["operando2"];
        echo "$suma";

    }
     elseif(isset($_POST) && !empty($_POST) && $_POST["operacion"] == 'resta'){
        $resta = $_POST["operando1"] - $_POST["operando2"];
        echo "$resta";
    }
    elseif(isset($_POST) && !empty($_POST) && $_POST["operacion"] == 'multiplicacion'){
        $multiplicacion = $_POST["operando1"] * $_POST["operando2"];
        echo "$multiplicacion";
    }
   elseif(isset($_POST) && !empty($_POST) && $_POST["operacion"] == 'division'){
        $division = $_POST["operando1"] / $_POST["operando2"];
        echo "$division";
    }
    else{
        echo "Todavia no hemos recibido nada!";
    }

    ?>
</body></html>