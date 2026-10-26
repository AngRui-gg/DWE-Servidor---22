<?php
function decimalABinario($numero) {
    $binario = "";

    while ($numero > 0) {
        $binario = ($numero % 2) . $binario;
        $numero = intdiv($numero, 2);
    }

    return $binario;
}

$decimal = $_POST["decimal"];
$binario = decimalABinario($decimal);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CONVERSOR BINARIO</title>
</head>
<body>
    <h1>CONVERSOR BINARIO</h1>

    <p><strong>Resultado de la conversión</strong></p>
    <p>Número Decimal: <strong><?php echo $decimal; ?></strong></p>
    <p>Número Binario: <strong><?php echo $binario; ?></strong></p>

    <a href="binario.html">Volver</a>
</body>
</html>