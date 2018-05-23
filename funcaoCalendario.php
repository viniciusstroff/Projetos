<?php

function linha($semana) {


    for ($i = 0; $i <= 6; $i ++) {
        if (isset($semana[$i])) {
            if ($i == 0) {
                echo "<td><font color='red'>{$semana[$i]}</font></td>";
            }if ($i != 0 && $i != 6) {
                echo "<td><font color='black'>{$semana[$i]}</font></td>";
            } if ($i > 5) {
                echo "<td><b>{$semana[$i]}</b></td>";
            }
        }
    }

    echo "</tr>";
}

/* * function linha2($semana){
  for ($i = 0; $i <= 6; $i ++){
  if (isset($semana[$i])){
  } if ($i == 0){
  echo "<td><font color='red'>{$semana[$i]}</font></td>";
  }if ($i != 0 && $i != 6) {

  } if ($i > 5){
  echo "<td><b>{$semana[$i]}</b></td>";
  }
  }
  echo "</tr>";
  } * */

function calendario() {


    $dia =1;
    //$totalDia=31;

    //1,3,5,7,8,10,12=31
    //4,6,9,11 = 30

   


    $semana = array();
    while ($dia <= 31) {

        array_push($semana, $dia);
        if (count($semana) == 7) {
            linha($semana);
            $semana = array();
        }
        $dia++;
        $m++;
    }
    linha($semana);
}

function completo() {
    //1,3,5,7,8,10,12=31
    //4,6,9,11 = 30
    //0,1,2,3,4,5,6,7,8,9,10,11 
   
   
    for ($m = 0; $m <= 11; $m++) {
        
        $mes = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
        if ($m == 1) {
            $totalDia = 28;
        } else if($m==0|| $m==2 || $m==4 || $m==6 || $m==7 || $m==9 || $m==11){
            $totalDia=31;
        }else{
            $totalDia=30;
        }

        echo"<table border='1'>";
        echo "<tr><th colspan='7'>" . $mes[$m] . "</th></tr>";
        echo "<th>Dom</th>
                <th>Seg</th>
                <th>Ter</th>
                <th>Qua</th>
                <th>Qui</th>
                <th>Sex</th>
                <th>Sab</th>";

        echo"</tr>";
        //calendario();
        
        // metodo do calendario dentro do completo
       $dia = 1;
        
        $semana = array();
        while ($dia <= $totalDia) {

            array_push($semana, $dia);
            if (count($semana) == 7) {
                linha($semana);
                $semana = array();
            }
            $dia++;
        }
        linha($semana);
        echo"</table>";
        




        // echo "</th>";
    }
}
