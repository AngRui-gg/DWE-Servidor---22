/*
Programa 2
 define un array con las temperaturas máximas registradas durante 
 10 días. El programa mostrará una tabla
*/

//VERSIÓN 2: teniendo en cuenta comentarios de Alfonso.

<HTML> 
    <HEAD>
        <TITLE> 
            EJ2V2 ARRAYS – Temperaturas en tabla 
        </TITLE>
    </HEAD> 
    <BODY> 
        <?php
        $temperaturas = array (18, 21, 19, 24, 25, 22, 20, 26, 23, 21); 
        $difTemp = array();

        for($i=0; $i<count($temperaturas); $i++)
        {
            if($i==0)
            {
                $difTemp[$i] = "-";
            }
            else
            {
                $difTemp[$i] = $temperaturas[$i-1] - $temperaturas[$i];
            }
        }
        var_dump($temperaturas);
        var_dump($difTemp);

        ?>
    </table>
    </BODY> 
</HTML> 