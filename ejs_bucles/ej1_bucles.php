<HTML> 
    <HEAD>
        <TITLE> 
            EJ1 Bucles – Estadistica secuencia 
        </TITLE>
    </HEAD> 
    <BODY> 
        <?php  
         $inicio = 1;     
         $fin = 100; 

         $num_par=0;
         $num_impar=0;
         $multiplo_tres=0;
         $suma_tot=0;

        print "<b> Numeros del 1 al 100 <br><br>  </b>" ;

        for ($inicio; $inicio <= $fin; $inicio++) 
        {
            $suma_tot=$inicio+$suma_tot;
            if($inicio%2==0)
            {
                $num_par++;
            }
            else 
            {
                $num_impar++;
            }
            
            if($inicio%3==0)
            {
                $multiplo_tres++;
            }
        }

        $inicio=$inicio-1; //restamos uno xq el bucle empieza en 1 en lugar de en 0

        print "Cantidad de numeros: $inicio.<br>";
        print "Numeros pares: $num_par. <br>";
        print "Numeros impares:  $num_impar. <br>";
        print "Multiplos de 3: $multiplo_tres.<br>";
        print "Suma total: $suma_tot.  <br>";
        ?> 
    </BODY> 
</HTML> 