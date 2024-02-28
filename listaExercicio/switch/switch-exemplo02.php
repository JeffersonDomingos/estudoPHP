<?php
$pagamento = 2;

switch ($pagamento) {

    case 0:

        echo "Pagamento no débito";
        break;

    case 1:

        echo "Pagamento no crédito";
        break;

    case 2:
        
        echo "Pagamento no PIX";
        break;

    case 3:
        
        echo "Pagamento á vista";
        break;

    default:
       
        echo "Pagamento indiferente dos demais";
        break;
}

?>