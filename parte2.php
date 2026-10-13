<?php

// Variable del número aleatorio y pasar el resultado por GET
$lanzamiento = (rand(1,6));
$resultados = $_GET["resultados"] ?? "Primera tirada";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte 2 PHP</title>

    <style>
    button { padding: 10px 15px; margin: 50px; cursor: pointer; background-color: #007BFF; color: white; border: none; border-radius: 3px;}
        button:hover { background-color: #0056b3; }
        #resultado { margin-top: 15px; font-size: 1.2em; font-weight: bold; color: #000000; }
    
    a{ text-decoration: none; color: white; }
    
    </style>

</head>
<body>



<?php
if($resultados!=""){?>
<h1>Los resultados anteriores: <?= $resultados ?></h1>
<?php $resultados=$resultados . "," . $lanzamiento;
}else{
$resultados=$lanzamiento;
}
?>


<!-- Botón para lanzar el dado -->
<br><button type="submit" name="lanzar"><a href="parte2.php?resultados=<?= $resultados ?>">Lanzar dado</a></button>



</body>
</html>

