<?php

function ola($texto="Mundo", $periodo="Bom dia"){
    
    echo "Olá $texto! $periodo!<br>";
    
}

echo ola("", "Bom dia");
echo ola("", "Boa noite" );
echo ola("Glaucio", "Boa tarde");
echo ola("João", "");

?>