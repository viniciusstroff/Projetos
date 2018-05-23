<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        //echo "hoje é dia ". date('d/m/Y');
        //echo "agora são :". date('H:i:s');
        
       
        $totalDia=31;
        $dia=0;
        while($dia<=$totalDia ){
            for($ms=1;$ms<=12;$ms++){
                if($ms==2){
                    $totalDia=28;
                }else{
                    $totalDia=31;
                }
   
            }
            $dia++;
            echo "</br>dia: ".$dia;
            echo "<hr/>";
            echo "</br> Mes:".$ms; 
            
           //if()
            
            
        }
        
        
        
       
        ?>
</pre>
    </body>
</html>
