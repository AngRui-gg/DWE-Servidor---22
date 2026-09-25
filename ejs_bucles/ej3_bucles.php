<HTML> 
    <HEAD>
        <TITLE> 
            EJ3 Bucles – Tablas multiplicar 
        </TITLE>
    </HEAD> 
    <BODY> 

        <?php  
         $num1 = 3;     
         $num2 = 7; 
         $resultado;
        
        for ($num1; $num1<=$num2; $num1++)
        {
            echo "<h3>Tabla del $num1</h3>";
            echo "<table border='1'>";
            echo "<tr><th>Operación</th><th>Resultado</th></tr>";

            for ($i = 1; $i <= 10; $i++) 
            {
                $resultado = $num1 * $i;
                echo "<tr><td>$num1 x $i</td><td>$resultado</td></tr>";
            }

            echo "</table>";
        }
         
        ?> 
    </BODY> 
</HTML> 