<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>FICHERO 5</title>
</head>
<body>

<h2>Operaciones con ficheros</h2>

<form name='fichero5' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='post'>
    <p>Fichero (Ruta/nombre): *
        <input type="text" name="fichero">
    </p>

    <p>Operaciones:</p>
    <p><input type="radio" name="operacion" value="fichero" checked> Mostrar fichero</p>
    <p><input type="radio" name="operacion" value="linea"> Mostrar línea
        <input type="number" name="num_linea" value="1">
    </p>
    <p><input type="radio" name="operacion" value="n_lineas"> Mostrar N primeras líneas
        <input type="number" name="num_n" value="5">
    </p>

    <input type="submit" value="Ejecutar operación">
    <input type="reset" value="Borrar">
</form>

<?php
require_once 'funciones.php';

// Solo se ejecuta si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $ruta = trim($_POST['fichero']);
    $operacion = $_POST['operacion'];
    $num_linea = $_POST['num_linea'];
    $num_n = $_POST['num_n'];

    echo "<h3>Contenido del fichero</h3>";

    if (!file_exists($ruta)) { // si no existe, mensaje de error
        echo "<p>Error: el fichero no existe.</p>";
    } else {
        $contenido = leer_fichero($ruta);
        $lineas = explode("\n", $contenido); // una posición del array por cada línea

        if ($operacion == "fichero") {
            $contador = 0;
            foreach ($lineas as $linea) {
                if (trim($linea) != "") {
                    $contador++;
                    echo "<p>Línea $contador: $linea</p>";
                }
            }
        }

        if ($operacion == "linea") {
            if ($num_linea < 1 || $num_linea > count($lineas)) {
                echo "<p>Error: la línea $num_linea no existe.</p>";
            } else {
                echo "<p>Línea $num_linea: " . $lineas[$num_linea - 1] . "</p>";
            }
        }

        if ($operacion == "n_lineas") {
            $contador = 0;
            foreach ($lineas as $linea) {
                if (trim($linea) != "" && $contador < $num_n) {
                    $contador++;
                    echo "<p>Línea $contador: $linea</p>";
                }
            }
        }
    }
}
?>

</body>
</html>
