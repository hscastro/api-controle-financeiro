<?php
	//Desenvolvedor: Antonio Halyson 
	//email: halisonsc5@gmail.com
	//Data:16/12/2020 as 20:00
    //http://github.com/hscastro
    
    function validarCaracteres($str){
        
        $contador = 0;
        $tamanho = strlen($str);
        $newString;

        for($i = 0; $i < $tamanho; $i++){

            if(!preg_match('/^[(-[-{-([-)[-])-[)-(}-)}-{)-{(-}]-[}-]}-{[)]+/', $str[$i])){  
                 
                $newString .= $str[$i];
            } 
        }

        if($newString === $str){
            echo 'valido';
        }else{
            echo 'Inválido';
        }         
        
    } 

        
      
    
        // if(preg_match('/^[a-zA-Z0-9]+/', $str) OR !preg_match('/^[{-}]+/', $str)) {
        //     echo 'Valido!';
        // }else {
        //     echo 'Inválidos';
        // }        
    

    $str_ = "[]";
    $teste = validarCaracteres($str_);
    echo $teste;

?>