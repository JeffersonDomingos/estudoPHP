<?php

$nome = "Glaucio";
$sobrenome = "Bezerra";

function teste(){
    
    global $nome;
    global $sobrenome;
    echo $nome;
    echo $sobrenome;
}

function teste2(){
    
   $nome = "João";
   global $sobrenome;
    
   echo $nome. "" . $sobrenome . " agora no teste2";
   
    
}

teste();

teste2();


?>