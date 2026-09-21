<HTML> <HEAD><TITLE> EJ4 Strings - Generador de URL amigable (slug) </TITLE></HEAD> 
    <BODY>  
        <?php
            $titulo = "Introducción a la Programación Web con PHP"; 

            $titulo = strtolower($titulo);
            echo("http://".trim(str_replace(" ","-",$titulo)));
        ?> 
    </BODY> 
</HTML> 