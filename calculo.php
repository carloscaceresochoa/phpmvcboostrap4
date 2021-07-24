<?php

    function areaRectangulo($base,$altura){
        return $base*$altura;
    }

    function areaTriangulo($base,$altura){
        return areaRectangulo($base,$altura)/2;
    }

    function mostrarFigura($base,$altura,$figura){

        $area=0;
        switch($figura){

            case 1:
                $area=areaRectangulo($base,$altura);
            break;
            case 2;
                $area=areaTriangulo($base,$altura);
            break;
            

        }
        echo "Base:".$base."<br>";
        echo "Altura:".$altura."<br>";
        echo "Area:".$area."<br>";
           

    }

    function retornarAreaFigura($base,$altura,$figura){
        $area=0;
        switch($figura){

            case 1:
                $area=areaRectangulo($base,$altura);
            break;
            case 2;
                $area=areaTriangulo($base,$altura);
            break;         

        }

        return $area;
    }