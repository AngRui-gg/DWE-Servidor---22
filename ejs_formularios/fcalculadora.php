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

$oper1 = "";
$oper2 = "";
$operacion = "suma";
$resultado = "";

if ($_SERVER['REQUEST_METHOD']=='POST') {

    echo "El method que ha usado es: ",$_SERVER['REQUEST_METHOD'],"<br>"; 
    //si esta variable se llena, significa que el usuario ha interactuaod con la factura

    echo "El nombre del programa es:", $_SERVER["PHP_SELF"], "<br>";

    $oper1 = $_POST["oper1"];
    $oper2 = $_POST["oper2"];
    $operacion = $_POST["operacion"];

    switch ($operacion) {
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

    <?php if ($resultado != "") { ?>
        <p><strong>Resultado de la operación</strong></p>
        <p><?php echo $resultado; ?></p>
    <?php } ?>

    
    <form name='fcalculadora' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
        Operando 1:
        <input type="text" name="oper1" value="<?php echo $oper1; ?>" size="15"><br>

        Operando 2:
        <input type="text" name="oper2" value="<?php echo $oper2; ?>" size="15"><br>

        Selecciona operación:<br>
        <input type="radio" name="operacion" value="suma" <?php if ($operacion == "suma"); ?>> Suma<br>
        <input type="radio" name="operacion" value="resta" <?php if ($operacion == "resta"); ?>> Resta<br>
        <input type="radio" name="operacion" value="producto" <?php if ($operacion == "producto"); ?>> Producto<br>
        <input type="radio" name="operacion" value="division" <?php if ($operacion == "division"); ?>> División<br><br>

        <input style="color: blue" type="submit" value="Enviar">
        <input type="button" value="Borrar" onclick="location.href='fcalculadora.php'">
    </form>
</body>
</html>