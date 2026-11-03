<HTML>

<HEAD>
    <TITLE> FICHERO 1 </TITLE>
</HEAD>

<BODY>

    <h2> Datos del alumno </h2>
    Guardar datos de alumnos en fichero de texto (con campos de longitud fija)

    <form name='fichero1' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='post'>

        Nombre: *
        <input type='text' name='nombre' value='' size=15><br>

        Apellido 1: *
        <input type='text' name='apellido1' value='' size=15><br>

        Apellido 2: *
        <input type='text' name='apellido2' value='' size=15><br>

        Fecha nacimiento: *
        <input type='date' name='fecha' value=''><br>

        Localidad: *
        <input type='text' name='localidad' value='' size=15><br>

        <input type="submit" value="Guardar alumno"> <!--el submit en cuanto lo pinchamos, nos lleva al action-->

        <input type="reset" value="Limpiar">

    </FORM>
</BODY>

</HTML>


<?php

function funcion_limpiar($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


function comprobar_obligatorios($nombre, $apellido1, $apellido2, $fecha, $localidad) {
    if (is_null($nombre) || is_null($apellido1) || is_null($apellido2) || is_null($fecha) || is_null($localidad)) {
        return false;
    }
    return true;
}

function ajustar($texto, $longitud) {
    return str_pad($texto, $longitud); 
}

function guardar_alumno($nombre, $apellido1, $apellido2, $fecha, $localidad) {
    //el .= es como el += pero con texto.
    $linea = ajustar($nombre, 40); 
    $linea .= ajustar($apellido1, 41); 
    $linea .= ajustar($apellido2, 42); 
    $linea .= ajustar($fecha, 10); 
    $linea .= ajustar($localidad, 27); 
    file_put_contents("/../files/alumnos1.txt", $linea . "\n", FILE_APPEND);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    echo "El method que ha usado es: ", $_SERVER['REQUEST_METHOD'], "<br>";

    $nombre = funcion_limpiar($_POST['nombre']);
    $apellido1 = funcion_limpiar($_POST['apellido1']);
    $apellido2 = funcion_limpiar($_POST['apellido2']);
    $fecha = funcion_limpiar($_POST['fecha']);
    $localidad = funcion_limpiar($_POST['localidad']);

    if (comprobar_obligatorios($nombre, $apellido1, $apellido2, $fecha, $localidad)) {
        guardar_alumno($nombre, $apellido1, $apellido2, $fecha, $localidad);
        $fecha = date("d/m/Y", strtotime($fecha)); //strtotime("2008-03-15") → coge el texto de la fecha, lo convierte a número y date ("d/m/Y") lo coloca como fecha "15/03/2008"
        echo "Alumno guardado correctamente";
    } else {
        echo "Faltan campos obligatorios";
    }
}
?>