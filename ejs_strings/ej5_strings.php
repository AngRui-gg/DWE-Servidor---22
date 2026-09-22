<HTML> 
    <HEAD><TITLE> EJ5 Strings - Procesamiento de una URL </TITLE></HEAD> 
    <BODY>
        <?php
            $url = "https://www.tienda.es/productos/portatil.php?id=34&marca=lenovo"; 

            // SALIDA 1
            echo("<h3>Salida1:</h3>");

            $posProtocolo = strpos($url, "://"); //Seleccionamos hasta posición "://" en $url
            $protocolo = substr($url, 0, $posProtocolo);
            echo("Protocolo: $protocolo"."<br>"); 

            $resto = substr($url, $posProtocolo + 3); // el +3 empieza a seleccionar después deñ "://"
            $posSlash = strpos($resto, "/"); //seleccionamos hasta el primer / (el dominio)
            $dominio = substr($resto, 0, $posSlash);
            echo("Dominio: $dominio"."<br>");

            $posInterrogacion = strpos($resto, "?"); //seleccinamos del resto hasta el "?"
            $rutaCompleta = substr($resto, $posSlash, $posInterrogacion - $posSlash); //empieza en $resto, hasta $posSlash
            echo("Ruta: " . $rutaCompleta."<br>");

            $posUltimaBarra = strrpos($rutaCompleta, "/"); //la última "/" dentro de la ruta completa
            $fichero = substr($rutaCompleta, $posUltimaBarra + 1);
            echo("Fichero: $fichero" . "<br>");

            $parametros = substr($resto, $posInterrogacion + 1);
            echo("Parámetros: ".$parametros."<br>");

        

        
        
        // SALIDA 2
        echo "<br>";
        echo("<h3>Salida2:</h3>");
        echo ("Protocolo: ".$protocolo."<br>");
        echo ("Dominio: ".$dominio."<br>");
        echo ("Ruta: ".$rutaCompleta."<br>");
        echo ("Fichero: ".$fichero."<br>");

        $listaParametros = explode("&", $parametros); //separamos cada parámetro en array
        $parId = explode("=", $listaParametros[0]);   // ["id", "34"]
        $parMarca = explode("=", $listaParametros[1]); // ["marca", "lenovo"]
        echo("Id producto: ".$parId[1]."<br>");
        echo("Marca: ".$parMarca[1]."<br>");

        ?>  
    </BODY>
</HTML> 

