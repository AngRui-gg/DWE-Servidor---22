/*
Programa 1
definir un array y almacenar los 20 primeros números impares. 
Mostrar en la salida una tabla como la de la figura
*/


<HTML> 
    <HEAD>
        <TITLE> 
            EJ1 ARRAYS – Primeros numeros impares 
        </TITLE>
    </HEAD> 
    <BODY> 

    <table border="1">
        <tr>
            <th>Indice</th>
            <th>Valor</th>
        </tr>

        <?php
            $numImp = array();
            $num = 1;
            $i = 0;

            while ($i <= 20)
            {
                if ($num % 2 !== 0)
                {
                    $numImp[$i] = $num;

                    echo "<tr>";
                    echo "<td> $i </td>";
                    echo "<td> $numImp[$i] </td>";
                    echo "</tr>";

                    $i++;
                }
                $num++;
            }
        ?>
    </table>
    </BODY> 
</HTML> 