<?php

// Variable del lanzamiento del dado
$lanzamiento = rand(1, 6);
// Variable del resultado que se pasa por GET
$resultado = $_GET["resultado"] ?? "Primera tirada";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte 1 PHP</title>

    <style>
    button { padding: 10px 15px; margin: 50px; cursor: pointer; background-color: #007BFF; color: white; border: none; border-radius: 3px;}
        button:hover { background-color: #0056b3; }
        #resultado { margin-top: 1px; font-size: 1.2em; font-weight: bold; color: #000000; }
    
    a{ text-decoration: none; color: white; }
    
    </style>

</head>
<body>

<!-- Botón para lanzar el dado -->

    <button><a href="parte1.php?resultado=<?php echo $lanzamiento; ?>">Lanzar dado</a></button>

    <!--<a href="parte1.php?resultado=<?php // echo $resultado; ?>"></a> -->



    <!-- Contenedor para la zona donde se muestra el número -->
<div id="resultado">


<?php echo $resultado; ?>

<!-- Script para probarlo después con el switch -->

</div>

    
</body>
</html>


