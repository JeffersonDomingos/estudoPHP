<?php

$numero1 = 6;
$numero2 = 2;

$escolha = 2;

function soma(){
   
    global $numero1;
    global $numero2;
    global $soma;
    
   
    $soma = $numero1 + $numero2;
    
    echo "A soma dos números são: " . $soma;
    
    return $soma;

}

function subtracao(){
    
    global $numero1;
    global $numero2;
    global $subtracao;
    
    $subtracao = $numero1 - $numero2;
    
    echo "A subtração dos números é: " . $subtracao;
    
    return $subtracao;
    
}

function multiplicacao(){
    
    global $numero1;
    global $numero2;
    global $multiplicacao;
    
    $multiplicacao = $numero1 * $numero2;
    
    echo "A multiplicação dos números são: " . $multiplicacao;
    
    return $multiplicacao;
    
}

function divisao(){
    
    global $numero1;
    global $numero2;
    global $divisao;
    
    $divisao = $numero1 / $numero2;
    
    echo "A divisão entre os números vai ficar: " . $divisao;
    
    return $divisao;
    
}

switch ($escolha){
    
    case 1:
       soma();
    break;
    
    case 2;
        subtracao();
    break;
    
    case 3;
        multiplicacao();
    break;
    
    case 4;
        divisao();
    break;
    
    default:
        echo "Solicitação não compreendida!";
    break;
}



?>