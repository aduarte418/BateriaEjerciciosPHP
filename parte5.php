<?php

// Variables recibidas del formulario
$valor1 = $_GET["valor1"] ?? "";
$valor2 = $_GET["valor2"] ?? "";
$operador = $_GET["operador"] ?? "";
$resultado = "";

// Solo calculamos si se ha seleccionado un operador
if ($operador != "") {
    switch ($operador) {
        case "and":
            $resultado = ($valor1 && $valor2) ? "true" : "false";
            break;
        case "or":
            $resultado = ($valor1 || $valor2) ? "true" : "false";
            break;
        case "xor":
            $resultado = ($valor1 xor $valor2) ? "true" : "false";
            break;
        case "+":
            $resultado = $valor1 + $valor2;
            break;
        case "-":
            $resultado = $valor1 - $valor2;
            break;
        default:
            $resultado = "Operador no válido";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte 5 PHP</title>

    <style>
        button { padding: 10px 15px; margin: 10px; cursor: pointer; background-color: #007BFF; color: white; border: none; border-radius: 3px;}
        button:hover { background-color: #0056b3; }
        #resultado { margin-top: 15px; font-size: 1.2em; font-weight: bold; color: #000000; }
        a { text-decoration: none; color: white; }
    </style>

</head>
<body>

<!-- Formulario con opciones desplegables -->
<form action="parte5.php" method="GET">

    <!-- Input para el valor 1 -->
    <input type="text" id="valor1" name="valor1" placeholder="Valor 1" value="<?php echo $valor1; ?>">

    <!-- Desplegable de operador -->
    <select id="operador" name="operador">
        <option value="">-- Selecciona el operador --</option>
        <option value="and" <?php if ($operador == "and") echo "selected"; ?>>and</option>
        <option value="or" <?php if ($operador == "or") echo "selected"; ?>>or</option>
        <option value="xor" <?php if ($operador == "xor") echo "selected"; ?>>xor</option>
        <option value="+" <?php if ($operador == "+") echo "selected"; ?>>+</option>
        <option value="-" <?php if ($operador == "-") echo "selected"; ?>>-</option>
    </select>

    <!-- Input para el valor 2 -->
    <input type="text" id="valor2" name="valor2" placeholder="Valor 2" value="<?php echo $valor2; ?>">

    <br>
    <!-- Botón para enviar datos (dentro del form) -->
    <button type="submit">Enviar</button>

</form>

<!-- Contenedor para la zona donde se muestra el resultado -->
<div id="resultado">
    <p>Resultado:</p>
    <?php echo $resultado; ?>
</div>

</body>
</html>
