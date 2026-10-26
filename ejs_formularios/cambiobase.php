<?php
function convertir($numero, $base) {
    $digitos = "0123456789ABCDEF";
    $resultado = "";

    while ($numero > 0) {
        $resultado = $digitos[$numero % $base] . $resultado;
        $numero = intdiv($numero, $base);
    }

    return $resultado;
}

function aBinario($numero) {
    return convertir($numero, 2);
}

function aOctal($numero) {
    return convertir($numero, 8);
}

function aHexadecimal($numero) {
    return convertir($numero, 16);
}

$decimal = $_POST["decimal"];
$base = $_POST["base"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CONVERSOR NUMERICO</title>
</head>
<body>
    <h1>CONVERSOR NUMERICO</h1>

    <p><strong>Resultado de la conversión</strong></p>
    <p>Número Decimal: <strong><?php echo $decimal; ?></strong></p>

    <?php if ($base == "binario" || $base == "todos") { ?>
        <p>Número Binario: <strong><?php echo aBinario($decimal); ?></strong></p>
    <?php } ?>

    <?php if ($base == "octal" || $base == "todos") { ?>
        <p>Número Octal: <strong><?php echo aOctal($decimal); ?></strong></p>
    <?php } ?>

    <?php if ($base == "hexadecimal" || $base == "todos") { ?>
        <p>Número Hexadecimal: <strong><?php echo aHexadecimal($decimal); ?></strong></p>
    <?php } ?>

    <a href="cambiobase.html">Volver</a>
</body>
</html>