<HTML> 
    <HEAD>
        <TITLE> EJ2 Strings - Analizador de nombre de usuario </TITLE>
    </HEAD> 
    
    <BODY> 
        <?php     
        $nombre = "   aLBeRTo gaRCia loPEz   "; 
        
        echo("Cadena original: \"$nombre\"" . "<br>");
        $nombre = strtolower($nombre);
        $nombre = trim($nombre);
        echo("Nombre normalizado: ". ucwords($nombre). "<br>");
        echo("Numero de caracteres: ". strlen($nombre). "<br>");
        echo("Nombre: ".ucwords(substr($nombre,0,7)). "<br>");
        echo("Primer apellido: ".ucwords(substr($nombre,8,6)). "<br>");
        echo("Segundo apellido: ".ucwords(substr($nombre,15)). "<br>");
        echo("Iniciales: ".ucwords(substr($nombre,0,1)).".".ucwords(substr($nombre,8,1)).".".ucwords(substr($nombre,15,1)).".". "<br>");
        echo("Nombre de usuario: ".substr($nombre,0,7).".".substr($nombre,8,6). "<br>");
        ?> 
    </BODY> 
</HTML> 