<?php
    require 'calculo.php';
    if(isset($_POST['base']) && isset($_POST['altura']) && isset($_POST['figura'])){

            $base=htmlspecialchars($_POST['base']);
            $altura=htmlspecialchars($_POST['altura']);
            $figura=htmlspecialchars($_POST['figura']);
            
            $valb=0;
            $vala=0;
            $valf=0;

            if($base==""){
                $valb=1;
            }
            if($altura==""){
                $vala=1;
            }
            if($figura=="0"){
                $valf=1;
            }

            if($figura!="0" && $base!="" && $altura!=""){
                $area=retornarAreaFigura($base,$altura,$figura);
            }
   }

    include 'form.php';


   
    
