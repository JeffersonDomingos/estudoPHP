<?php

class Pessoa {
    
    public $nome = "Jefferson Domingos";
    protected $idade = "24";
    private $senha = "123456";
    
    public function verDado(){
        
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
        
    }
    
}




?>
