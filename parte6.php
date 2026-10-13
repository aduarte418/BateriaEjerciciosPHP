<?php

// Frase por defecto
$frase = "Hace frío mucho frío tiempo frío que frío me frío estoy frío quedando frío contigo frío";

// Array de palabras con las palabras de la frase
$array = explode(' ', $frase);

// Función para recorrer el array y eliminar las palabras en las posiciones pares (impares en el array)"
function eliminarPar ($array){
    for ($i = 0; $i < 16; $i++) {
        if ($i % 2 != 0) {
            unset($array[$i]);
        }
    }
    return $array;
}

// Función para recorrer el array y eliminar la palabra "frío"
function eliminarFrio ($array){
    for ($i = 0; $i < 16; $i++) {
        if ($array[$i] == "frío") {
            unset($array[$i]);
        }
    }
    return $array;
}

// Guardar la frase descompuesta en un array
$fraseCambioPar = eliminarPar($array);

$fraseCambioFrio = eliminarFrio($array);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte 6 PHP</title>

    <style>
    button { padding: 10px 15px; margin: 50px; cursor: pointer; background-color: #007BFF; color: white; border: none; border-radius: 3px;}
        button:hover { background-color: #0056b3; }
        #resultado { margin-top: 15px; font-size: 1.2em; font-weight: bold; color: #000000; }
        
    </style>

</head>
<body>

<!-- Contenedor de zona para devolver la frase -->

<div id="resultado">
    <!-- Mostrar frase original -->
    <p>Frase original: <?php echo $frase; ?></p>
    <br>
    
    <!-- Mostrar frase cambiada habiendo eliminado pares -->
    <p>Frase cambiada eliminando palabras en posiciones pares: <?php echo implode(' ', eliminarPar($array)); ?></p>

    <br>

    <!-- Mostrar frase cambiada habiendo eliminado la palabra "frío" -->
    <p>Frase cambiada eliminando la palabra "frío": <?php echo implode(' ', eliminarFrio($array)); ?></p>
    
</div>
    
</body>
</html>


