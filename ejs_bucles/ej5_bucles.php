<HTML> 
    <HEAD>
        <TITLE> 
            EJ5 Bucles - Factorial 
        </TITLE>
    </HEAD> 
    <BODY> 

        <?php  
         $num = 5;
         $resultado = $num;
        
        print("$num!= $num x ");

        for($i=($num-1); $i>0; $i--)
        {
            $resultado = $resultado * $i;

            if($i <> 1)
                print("$i x ");
            else 
                print ("$i = $resultado");
        }

        ?> 
    </BODY> 
</HTML> 