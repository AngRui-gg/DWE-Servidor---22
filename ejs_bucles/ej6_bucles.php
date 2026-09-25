<HTML> 
    <HEAD>
        <TITLE> 
            EJ6 Bucles – Simulador de ahorro 
        </TITLE>
    </HEAD> 
    <BODY> 

        <?php  
        $capital = 1000;    
        $interes = 5;    
        $anios = 5; 

        $capitalInicial = $capital;

        print("Capital inicial: $capitalInicial <br>");

        for($i=1; $i<=$anios; $i++)
        { 
            $capital = $capital + ($capital * $interes / 100);
            $capitalFormateado = number_format((float) $capital, 2, ",", "");
            print("Año $i: $capitalFormateado <br>");
        }

        echo "<br>";
        
        print("Capital final: $capitalFormateado <br>");
        
        ?> 
    </BODY> 
</HTML> 