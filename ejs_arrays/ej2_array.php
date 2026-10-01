/*
Programa 2
 define un array con las temperaturas máximas registradas durante 
 10 días. El programa mostrará una tabla
*/


<HTML> 
    <HEAD>
        <TITLE> 
            EJ2 ARRAYS – Temperaturas en tabla 
        </TITLE>
    </HEAD> 
    <BODY> 

    <table border="1">
        <tr>
            <th>Día</th>
            <th>Temperatura</th>
            <th>Diferencua dia anterior</th>
        </tr>

        <?php
           $temperaturas = array (18, 21, 19, 24, 25, 22, 20, 26, 23, 21);

           $max=$temperaturas[0];
           $diaMax=0;
           $min=$temperaturas[0];
           $diaMin=0;
           $dias=1; 

           $diferencia; //para el + o el - de la diferencia y recoge el valor final
           $diferenciaNum=0; //diferencia valor numérico
           $anterior=0;

           $media=0;
           $suma=0;
           $encima=0;

           foreach($temperaturas as $indice => $temp)
            {
                //DIFERENCIA DIA ANTERIOR
                if($indice==0)
                    $diferencia = "-";
                else
                {
                    $diferenciaNum = $temp - $anterior;
                    if ($diferenciaNum>0)
                    {
                        $diferencia = "+$diferenciaNum";
                    }
                    else 
                    {
                        $diferencia=$diferenciaNum;
                    }
                }

                echo "<tr>";
                echo "<td> $dias </td>";
                echo "<td> $temp </td>";
                echo "<td> $diferencia </td>";
                echo "<tr>";

                //TEMP MAX Y MIN
                if($temp>$max){
                    $max=$temp;
                    $diaMax = $dias;
                }
                if($temp<$min)
                {
                    $min=$temp;
                    $diaMin = $dias;
                }


                //CALCULO NECESARIO PARA LA MEDIA
                $suma = $suma + $temp;


                $dias++;
                $anterior = $temp; //se sustituye la temp del día x el que acabamos de pasar
            }

            echo "<br>";
            $media = $suma + count($temperaturas);
            
            //ENCIMA MEDIA
            foreach($temperaturas as $temp)
            {
                if($temp>$media)
                    $encima++;
            }

        ?>
    </table>
    </BODY> 
</HTML> 