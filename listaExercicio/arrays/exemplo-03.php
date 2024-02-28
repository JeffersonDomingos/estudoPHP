<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Jefferson',
    'idade' => 24
    
));

array_push($pessoas, array(
   'nome' => 'Gislene',
    'idade' => '24'   
));

print_r($pessoas[0]['nome']);

?>