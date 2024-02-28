<?php

interface Automovel {
    
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
    
}

abstract class Veiculo implements Automovel {
    
    
    
    public function acelerar($velocidade) {
        
        echo "O Veículo acelerou até " . $velocidade . "km/h";
    }
    
    public function frenar($velocidade) {
        
        echo "O veículo frenou até " . $velocidade . "km/h";
    }
    
    public function trocarMarcha($marcha) {
        
        echo "O veículo engatou a marcha " . $marcha;
    }
    
    
}

?>