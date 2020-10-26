<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h1>Pagina fibonacci</h1>
<div>
    <ul>
    la sucesion de fibonacci parando cuando se pasa del millon es: <?php foreach($fibonacci as $elemento){?>
        <li><?= $elemento ?></li>
    <?php } ?>
    </ul>
</div>
</body>
</html>