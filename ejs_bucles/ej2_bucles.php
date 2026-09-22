<HTML> 
    <HEAD>
        <TITLE> 
             EJ2 Bucles – Tabla multiplicar 
        </TITLE>
    </HEAD> 
    <BODY> 
        <?php  
         $num = 8;
         $resultado;
         $operador_while=0;
         $op4=0;

        print "<h3>Bucle FOR </h3>";
        for($operador_for=0; $operador_for <= 10; $operador_for++)
        {
            $resultado = $num*$operador_for;
            print "$num x $operador_for = $resultado <br>";
        }
        print"<br>";

        print "<h3>Bucle DO WHILE </h3>";
        do
        {
            $resultado = $num*$operador_while;
            print "$num x $operador_while = $resultado <br>";
            $operador_while++;
        }while($operador_while <= 10);
        print"<br>";
        ?>


        <table border="1">
            <tr>
            <th>Operación</th>
            <th>Resultado</th>
        </tr>

        <?php
        print "<h3>Bucle FOREACH </h3>";
        // foreach necesita recorrer un array, así que generamos uno con range()
        $numeros = range(1, 10); // [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
        foreach ($numeros as $i) 
        {
            $resultado = $num * $i;
            echo "<tr>";
            echo "<td>" . $num . " x " . $i . "</td>";
            echo "<td>" . $resultado . "</td>";
            echo "</tr>";
        }
        print "<br>";
        ?> 
        </table>

        <?php
        print "<h3>Bucle WHILE </h3>";
        while($op4<=10)
        {
            $resultado=$num*$op4;
            print "$num x $op4 = $resultado <br>";
            $op4++;
        }
        ?>
    </BODY> 
</HTML> 