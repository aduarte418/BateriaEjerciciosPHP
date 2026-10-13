<?php

// Variables de cada sección de la frase del cuñao
$cuñao1 = $_GET["cuñao1"] ?? "";
$cuñao2 = $_GET["cuñao2"] ?? "";
$cuñao3 = $_GET["cuñao3"] ?? "";

// Variable para guardar la frase



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte 3 PHP</title>

    <style>
        button { padding: 10px 15px; margin: 50px; cursor: pointer; background-color: #007BFF; color: white; border: none; border-radius: 3px;}
        button:hover { background-color: #0056b3; }
        #resultado { margin-top: 15px; font-size: 1.2em; font-weight: bold; color: #000000; }
        .title {text-align: center;}
    a{ text-decoration: none; color: white; }
    </style>

</head>
<body>

<h1>Constructor de frases cuñao</h1>

<!-- Formulario con opciones desplegables -->
 <form>

    <!-- Desplegable 1 -->
    <select id="cuñao1" name="cuñao1">
        <option class="title" value="">-- Sujeto del cuñao --</option>
        <option>Yo en tu lugar</option>
        <option>La verdad es que</option>
        <option>Tú sabes que</option>
        <option>No hay duda de que</option>
        <option>Al final</option>
    </select>

    <!-- Desplegable 2 -->
    <select id="cuñao2" name="cuñao2">
        <option class="title" value="">-- Acción del cuñao --</option>
        <option>siempre hay que invertir en</option>
        <option>lo importante es</option>
        <option>nunca subestimes</option>
        <option>yo siempre digo que</option>
        <option>el secreto está en</option>
    </select>

    <!-- Desplegable 3 -->
    <select id="cuñao3" name="cuñao3">
        <option class="title" value="">-- Consejo del cuñao --</option>
        <option>la bolsa de valores</option>
        <option>el no tener dinero congelado en el banco</option>
        <option>lo chemtrails</option>
        <option>la nube</option>
        <option>las crypto</option>
    </select>

<br>
<br>
<button type="submit">Enviar</button>

</form>

<!-- Contenedor para la zona donde se muestra la frase del cuñao -->
<div id="resultado">
    <?php if ($cuñao1 && $cuñao2 && $cuñao3): ?>
        <p><?php echo htmlspecialchars($cuñao1) . " " . htmlspecialchars($cuñao2) . " " . htmlspecialchars($cuñao3); ?></p>
    <?php else: ?>
        <p>Selecciona todas las opciones.</p>
    <?php endif; ?>
</div>

</body>
</html>
