<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>cookies</title>
</head><body>
    <h1>Bienvenido <?= $_COOKIE['name']?> </h1>
    <h2>Lista de deseos</h2>
    <form method="post" action="?method=new">
        <label>Deseos</label><input type="text" value="" name="deseos"> <br>
        <input type="submit" value="deseos">
    </form>

    <?php if(count($deseos)){foreach($deseos as $deseo => $id){
        echo "Este es tu deseo numero $id: " . $deseo;
    }}else{
        echo "No hay deseos en tu lista";
    } ?>
    
 
</body></html>