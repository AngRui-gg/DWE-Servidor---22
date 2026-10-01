/*
Programa 3
 generar automáticamente un array con 20 números aleatorios 
 entre 1 y 100. Sin crear inicialmente dos arrays diferentes, 
 calcular:
*/


<HTML> 
    <HEAD>
        <TITLE> 
            EJ3 ARRAYS – Operaciones en array 
        </TITLE>
    </HEAD> 
    <BODY> 

        <?php
           $array = array();
           $num = 0;

           $sumaPosPar=0;
           $sumaPosImpar=0;
           $media=0;
           $mayorValorPar=0;
           $mayorValorImpar=0;
           $numPar=0;
           $numImpar=0;
           
           //CREAMOS EL ARRAY
           for($i=0; $i<=20; $i++)
            {
                $num = random_int(1,100);
                $array[$i]=$num;
            }

            //SUMA DE LAS POSICIONES PARES Y MAYOR NUM
            for ($i=0; $i<count($array); $i++)
            {
                if ($i%2 == 0)
                {
                    $sumaPosPar= $array[$i]+$sumaPosPar;
                    $numPar++;
                }
                if($array[$i]>$mayorValorPar)
                {
                    $mayorValorPar = $array[$i];
                }
            }

            //SUMA DE LAS POSICIONES IMPARES Y MAYOR NUM
            for ($i=0; $i<count($array); $i++)
            {
                if ($i%2 != 0)
                {
                    $sumaPosImpar= $array[$i]+$sumaPosImpar;
                    $numImpar++;
                }
                if($array[$i]>$mayorValorImpar)
                {
                    $mayorValorImpar = $array[$i];
                }
            }

            //MEDIA DE AMBOS GRUPOS
            $media = ($sumaPosPar + $sumaPosImpar)/count($array);

            //MOSTRAR DATOS EN UNA TABLA
            print "<table border=1>";
            print "<tr>";
            print "<th>   </th>";
            print "<th> Par </th>";
            print "<th> Impar </th>";
            print "<th> Otro </th>";
            print "</tr>";

            //posición pares e impares
            print "<tr>";
            print "<th> Posicion </th>";
            print "<td> $sumaPosPar </td>";
            print "<td> $sumaPosImpar </td>";
            print "<td> - </td>";
            print "</tr>";

            //media de ambos grupos
            print "<tr>";
            print "<th> Media </th>";
            print "<td> - </td>";
            print "<td> - </td>";
            print "<td> $media </td>";
            print "</tr>";

            //mayor valor de cada grupo
            print "<tr>";
            print "<th> Mayor valor </th>";
            print "<td> $mayorValorPar </td>";
            print "<td> $mayorValorImpar </td>";
            print "<td> - </td>";
            print "</tr>";

            //numero de valores
            print "<tr>";
            print "<th> Numero de valores </th>";
            print "<td> $numPar </td>";
            print "<td> $numImpar </td>";
            print "<thd>". count($array). "</td>";
            print "</tr>";

            print"</table>";



            var_dump ($array);
            print ("<br> La suma en las posiciones pares es: $sumaPosPar <br>");
            print ("La suma en las posiciones pares es: $sumaPosImpar <br>");
            print ("La media es: $media <br>");
            print("El mayor número par es: $mayorValorPar <br>");
            print("El mayor número impar es: $mayorValorImpar <br>");
            print("Hay $numPar números pares <br>");
            print("Hay $numImpar números impares <br>");
        ?>
    </table>
    </BODY> 
</HTML> 