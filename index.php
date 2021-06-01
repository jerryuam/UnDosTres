<?php 
    function calculaSuperDigito($numeroOriginal,$nvecesAConcatenar){
        $superDigito=0;
        $numeroEnCadena="";

        for($i=0; $i < $nvecesAConcatenar; $i++){ 
            $numeroEnCadena.=strval($numeroOriginal);
        }

        if(strlen($numeroEnCadena)==1){
            $superDigito=$numeroOriginal;
        }else{
            for($i=0; $i < strlen($numeroEnCadena); $i++) { 
                $superDigito=$superDigito+intval($numeroEnCadena[$i]);
            }
            $superDigito=calculaSuperDigito($superDigito,1);
        }


        return $superDigito;
    }

    function imprimeNSubcadenas($cadenaPrincipal,$posicionBusqueda){
        $resultado=[];
        $longitudSubcadena=1;
        $longitudCadena=strlen($cadenaPrincipal);
        
        for($i=1;$i<=$longitudCadena;$i++){ 
            for($j=0;$j<$longitudCadena;$j++){ 
                if(($j+$i)<=$longitudCadena){
                    array_push($resultado,substr($cadenaPrincipal,$j,($i)));
                }
            }
        }

        sort($resultado);

        return implode("",$resultado)[$posicionBusqueda-1];
    }
    
    var_dump(calculaSuperDigito(148,3));
    var_dump(imprimeNSubcadenas("dbac",3))
?>