<?php
function suma($a, $b) {
    return $a + $b;
}

function resta($a, $b) {
    return $a - $b;
}

function producto($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    return $a / $b;
}

$oper1 = $_POST["oper1"];
$oper2 = $_POST["oper2"];

switch ($_POST["operacion"]) {
    case "suma":
        $resultado = "$oper1 + $oper2 = " . suma($oper1, $oper2);
        break;
    case "resta":
        $resultado = "$oper1 - $oper2 = " . resta($oper1, $oper2);
        break;
    case "producto":
        $resultado = "$oper1 x $oper2 = " . producto($oper1, $oper2);
        break;
    case "division":
        $resultado = "$oper1 / $oper2 = " . division($oper1, $oper2);
        break;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CALCULADORA</title>
</head>
<body>
    <h1>CALCULADORA</h1>

    <p><strong>Resultado de la operación</strong></p>
    <p><?php echo $resultado; ?></p>

    <a href="calculadora.html">Volver</a>
</body>
</html>