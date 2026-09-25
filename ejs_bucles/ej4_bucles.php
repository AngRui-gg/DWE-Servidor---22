<HTML> 
    <HEAD>
        <TITLE> 
            EJ4 Bucles – Número primo
        </TITLE>
    </HEAD> 
    <BODY> 

        <?php  
         $num = 17;
         $division;
         $esPrimo = true;
        
        print("Numero analizado: $num <br>");

        for($i=2; $i<$num; $i++)
        {
            $division = $num%$i;
            if($division == 0)
                {
                    print("Probando divisor $i → Divisible <br>");
                    $esPrimo =false;
                }
            else
                {
                    print("Probando divisor $i → No divisible <br>");
                }
            
        }
        echo "<br>";

        if ($esPrimo==true)
        {
            print ("$num es un numero primo");
        }
        else
        {
            print ("$num NO es un numero primo");
        }

        ?> 
    </BODY> 
</HTML> 