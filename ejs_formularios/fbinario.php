<?php
function decimalABinario($numero) {
    $binario = "";

    while ($numero > 0) {
        $binario = ($numero % 2) . $binario;
        $numero = intdiv($numero, 2);
    }

    return $binario;
}

$decimal = "";
$binario = "";

if ($_SERVER['REQUEST_METHOD']=='POST') {

    echo "El method que ha usado es: ",$_SERVER['REQUEST_METHOD'],"<br>"; 
    //si esta variable se llena, significa que el usuario ha interactuaod con la factura

    echo "El nombre del programa es:", $_SERVER["PHP_SELF"], "<br>";

    $decimal = $_POST["decimal"];
    $binario = decimalABinario((int)$decimal);
}
?>

<HTML>
<HEAD> <TITLE> CONVERSOR BINARIO </TITLE>
</HEAD>
<BODY>
    <h1> CONVERSOR BINARIO </h1>
    <p><strong>Resultado de la conversión</strong></p>
    <p>Número Decimal: <?php echo $decimal; ?></p>
    <p>Número Binario: <?php echo $binario; ?></p>

<form name='fbinario' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>

Numero Decimal:
<input type='text' name='decimal' value='' size=15><br>

<input style="color: blue" type="submit" value="Enviar">
</FORM>
</BODY>
</html>