<?php

// Variables de cada sección de la frase del cuñao
$cuñao1 = $_GET["cuñao1"] ?? "";
$cuñao2 = $_GET["cuñao2"] ?? "";
$cuñao3 = $_GET["cuñao3"] ?? "";

// Variables para guardar los inputs de texto si se han escrito
$cuñao1Input = $_GET["cuñao1Input"] ?? "";
$cuñao2Input = $_GET["cuñao2Input"] ?? "";
$cuñao3Input = $_GET["cuñao3Input"] ?? "";

// Acción del botón pulsado y frase persistente
$accion = $_GET["accion"] ?? "";
$fraseGuardada = $_GET["fraseGuardada"] ?? "";
$mensaje = "";

// Definir arrays para cada sección de la frase del cuñao
$cuñao1Array = [
    "Yo en tu lugar",
    "La verdad es que",
    "Tú sabes que",
    "No hay duda de que",
    "Al final"
];

$cuñao2Array = [
    "siempre hay que invertir en",
    "lo importante es",
    "nunca subestimes",
    "yo siempre digo que",
    "el secreto está en"
];

$cuñao3Array = [
    "la bolsa de valores",
    "el no tener dinero congelado en el banco",
    "lo chemtrails",
    "la nube",
    "las crypto"
];

// Variables random para generar aleatoriamente una de las 5 opciones de cada array
$numRandom1 = (rand(0,4));
$numRandom2 = (rand(0,4));
$numRandom3 = (rand(0,4));

// Función para generar una frase aleatoria del cuñao
function generarFrase($cuñao1Array, $cuñao2Array, $cuñao3Array, $numRandom1, $numRandom2, $numRandom3) {
    return htmlspecialchars($cuñao1Array[$numRandom1]) . " " . htmlspecialchars($cuñao2Array[$numRandom2]) . " " . htmlspecialchars($cuñao3Array[$numRandom3]);
}

// Función para mostrar la frase del cuñao si se han seleccionado las tres opciones
function mostrarFrase($cuñao1, $cuñao2, $cuñao3) {
    if ($cuñao1 && $cuñao2 && $cuñao3) {
        return htmlspecialchars($cuñao1) . " " . htmlspecialchars($cuñao2) . " " . htmlspecialchars($cuñao3);
    } else {
        return null;
    }
}

// Función para mostrar la frase del cuñao si se han escrito inputs de texto
function mostrarFraseInput($cuñao1Input, $cuñao2Input, $cuñao3Input) {
    if ($cuñao1Input && $cuñao2Input && $cuñao3Input) {
        return htmlspecialchars($cuñao1Input) . " " . htmlspecialchars($cuñao2Input) . " " . htmlspecialchars($cuñao3Input);
    } else {
        return null;
    }
}

// Lógica para decidir qué frase mostrar y guardar
if ($accion == "aleatorio") {
    // Si pulsa 'No quiero pensar', genera una nueva frase aleatoria
    $fraseGuardada = generarFrase($cuñao1Array, $cuñao2Array, $cuñao3Array, $numRandom1, $numRandom2, $numRandom3);
} elseif ($accion == "enviar") {
    // Si pulsa 'Enviar' con las 3 opciones seleccionadas, actualiza la frase
    if ($cuñao1 && $cuñao2 && $cuñao3) {
        $fraseGuardada = mostrarFrase($cuñao1, $cuñao2, $cuñao3);
    } else {
        // Mostrar mensaje si falta alguna opción de los desplegables
        $mensaje = "Selecciona todas las opciones";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte 4 PHP</title>

    <style>
        button { padding: 10px 15px; margin: 10px; cursor: pointer; background-color: #007BFF; color: white; border: none; border-radius: 3px;}
        button:hover { background-color: #0056b3; }
        #resultado { margin-top: 15px; font-size: 1.2em; font-weight: bold; color: #000000; }
        #paso { cursor: pointer; background-color: #00643e; color: white; border: none; border-radius: 3px;}
        .title {text-align: center;}
        a{ text-decoration: none; color: white; }
    </style>

</head>
<body>

<h1>Constructor de frases cuñao</h1>

<!-- Formulario con opciones desplegables -->
 <form method="GET">

    <!-- Campo oculto para mantener la frase entre envíos -->
    <input type="hidden" name="fraseGuardada" value="<?php echo htmlspecialchars($fraseGuardada); ?>">

    <!-- Desplegable 1 -->
    <select id="cuñao1" name="cuñao1">
        <option class="title" value="">-- Sujeto del cuñao --</option>
        <option <?php if ($cuñao1 == "Yo en tu lugar") echo "selected"; ?>>Yo en tu lugar</option>
        <option <?php if ($cuñao1 == "La verdad es que") echo "selected"; ?>>La verdad es que</option>
        <option <?php if ($cuñao1 == "Tú sabes que") echo "selected"; ?>>Tú sabes que</option>
        <option <?php if ($cuñao1 == "No hay duda de que") echo "selected"; ?>>No hay duda de que</option>
        <option <?php if ($cuñao1 == "Al final") echo "selected"; ?>>Al final</option>
    </select>
    
    <!-- Desplegable 2 -->
    <select id="cuñao2" name="cuñao2">
        <option class="title" value="">-- Acción del cuñao --</option>
        <option <?php if ($cuñao2 == "siempre hay que invertir en") echo "selected"; ?>>siempre hay que invertir en</option>
        <option <?php if ($cuñao2 == "lo importante es") echo "selected"; ?>>lo importante es</option>
        <option <?php if ($cuñao2 == "nunca subestimes") echo "selected"; ?>>nunca subestimes</option>
        <option <?php if ($cuñao2 == "yo siempre digo que") echo "selected"; ?>>yo siempre digo que</option>
        <option <?php if ($cuñao2 == "el secreto está en") echo "selected"; ?>>el secreto está en</option>
    </select>

    <!-- Desplegable 3 -->
    <select id="cuñao3" name="cuñao3">
        <option class="title" value="">-- Consejo del cuñao --</option>
        <option <?php if ($cuñao3 == "la bolsa de valores") echo "selected"; ?>>la bolsa de valores</option>
        <option <?php if ($cuñao3 == "el no tener dinero congelado en el banco") echo "selected"; ?>>el no tener dinero congelado en el banco</option>
        <option <?php if ($cuñao3 == "lo chemtrails") echo "selected"; ?>>lo chemtrails</option>
        <option <?php if ($cuñao3 == "la nube") echo "selected"; ?>>la nube</option>
        <option <?php if ($cuñao3 == "las crypto") echo "selected"; ?>>las crypto</option>
    </select>

    <!-- Inputs de texto para permitir al usuario escribir su propia frase -->
    <br><br>
    <input type="text" id="cuñao1Input" name="cuñao1Input" placeholder="Escribe tu propio sujeto..." value="<?php echo htmlspecialchars($cuñao1Input); ?>">

    <input type="text" id="cuñao2Input" name="cuñao2Input" placeholder="Escribe tu propia acción..." value="<?php echo htmlspecialchars($cuñao2Input); ?>">

    <input type="text" id="cuñao3Input" name="cuñao3Input" placeholder="Escribe tu propio consejo..." value="<?php echo htmlspecialchars($cuñao3Input); ?>">

    <br><br>
    <button type="submit" id="enviar" name="accion" value="enviar">Enviar</button>
    <button type="submit" id="paso" name="accion" value="aleatorio">No quiero pensar</button>

</form>

<!-- Contenedor para la zona donde se muestra la frase del cuñao -->
<div id="resultado">

    <!-- Mensaje si no se seleccionaron las 3 opciones -->
    <?php if ($mensaje): ?>
        <p><?php echo $mensaje; ?></p>
    <?php endif; ?>

    <!-- Frase guardada (solo cambia cuando corresponde) -->
    <?php if ($fraseGuardada): ?>
        <p><?php echo $fraseGuardada; ?></p>
    <?php endif; ?>

    <!-- Frase generada con inputs de texto si se rellenaron los tres -->
    <?php if ($cuñao1Input && $cuñao2Input && $cuñao3Input): ?>
        <br>
        <p>Frase generada con inputs de texto: <?php echo mostrarFraseInput($cuñao1Input, $cuñao2Input, $cuñao3Input); ?></p>
    <?php endif; ?>

</div>

</body>
</html>