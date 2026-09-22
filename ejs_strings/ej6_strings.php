<HTML>
    <HEAD><TITLE> EJ6 Strings - Analizador de log de servidor </TITLE></HEAD>
    <BODY>
        <?php
            $log = "192.168.1.25 - GET /productos/listado.php - 200 - Mozilla/5.0";

            $ip = substr($log,0,12);
            echo("IP: " . $ip."<br>");

            $metodo = substr($log,15,3);
            echo("Método: " . $metodo."<br>");

            $posSlashRecurso = strpos($log, "/"); //recortamos hasta el primero /
            $posGuion1 = strpos($log, " - ", $posSlashRecurso); //buscamos " - " a partir de esa posición
            $recurso = substr($log, $posSlashRecurso, $posGuion1 - $posSlashRecurso);
            echo("Recurso: " . $recurso."<br>" );

            $posInicioCodigo = $posGuion1 + 3; //es +3 (empezamos en el 2 de 200=)
            $posGuion2 = strpos($log, " - ", $posInicioCodigo); //el - entre php y 200
            $codigo = substr($log, $posInicioCodigo, $posGuion2 - $posInicioCodigo);
            echo("Codigo HTTP: " . $codigo."<br>");

            $posInicioNavegador = $posGuion2 + 3; //empieza después del segundo -
            $navegador = substr($log, $posInicioNavegador);
            echo("Navegador: " . $navegador."<br><br>");

            $posPunto = strrpos($recurso, ".");
            $extension = substr($recurso, $posPunto + 1);
            $tipoRecurso = strtoupper($extension);
            echo("Tipo de recurso: " . $tipoRecurso."<br>");

            if (strpos($codigo, "200") === 0) {
                $peticionCorrecta = "SI";
            } else {
                $peticionCorrecta = "NO";
            }
            echo("Petición correcta: " . $peticionCorrecta."<br>");
        ?>

    </BODY> 
</HTML>