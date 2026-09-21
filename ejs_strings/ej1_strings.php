<HTML> 
    <HEAD>
        <TITLE> 
            EJ1 Strings – Conversor de Decimal a Binario 
        </TITLE>
    </HEAD> 
    <BODY> 
        <?php  
        $ip="192.18.16.204";  

        echo(gettype($ip). "<br>");
        
       echo( $prim = substr($ip,0,3). "<br> \n"); 
       echo( $sec = substr($ip,4,2). "<br> \n");
       echo( $ter = substr($ip,7,2). "<br> \n");
       echo( $cuar = substr($ip,10,3). "<br> \n");

       $prim = decbin((integer)$prim);
       $sec = decbin((integer)$sec);
       $ter = decbin((integer)$ter);
       $cuar = decbin((integer)$cuar);

        echo("IP $ip en binario es " . $prim . ".".$sec.".".$ter.".".$cuar);

        ?> 
    </BODY> 
</HTML> 