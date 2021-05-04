<?php
//Creamos un formulario que pida la edad 
//Crea un condiconales que segun la edad muestre si es 
//Mayor de edad,un recien nacido, un niño(a), un adolecente, un adulto(a)
//un señor(a), o un anciano
    $edad = (int) $_REQUEST["edad"];
    if($edad <= 0){
        echo <<<NoHaNacido
        No ha nacido en esta tierra maravillosa llamada colombia <3
NoHaNacido;
    }elseif($edad > 0 && $edad <= 3){
        echo <<<RecienNacido
        Es un recien nacido su edad es: $edad
RecienNacido;
    }elseif($edad >= 4 && $edad <= 10){
        echo <<<Niñoa
        Es un niño su edad es: $edad
Niñoa;
    }elseif($edad >= 11 && $edad <= 17){
        echo <<<Adolecente
        Es un adolecentee su edad es: $edad
Adolecente;
    }elseif($edad >= 18 && $edad <= 25){
        echo <<<MayorDeEdad
        Usted es mayor de edad: $edad
MayorDeEdad;
    }elseif($edad >= 26 && $edad <= 50){
        echo <<<Señora
        Es un señor su edad es : $edad
Señora;
    }elseif($edad >= 51 && $edad <= 99){
        echo <<<Ancianoa
        Es un Anciano su edad es : $edad
Ancianoa;
    }else{
        echo <<<ConDiositoSanto
        Usted esta en la ciudad de plata :) :P
ConDiositoSanto;
    }
    echo "<hr><a href='index.html'>Volver</a>"
?>