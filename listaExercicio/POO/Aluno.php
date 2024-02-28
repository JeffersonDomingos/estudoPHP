<?php

class Aluno {
    
    private $nome;
    private $idade;
    private $curso;
    
    public function getNome(){
        
        return $this->nome;
        
    }
    
    public function setNome($nome){
        
        $this->nome = $nome;
        
    }
    
    public function getIdade(){
        
        return $this->idade;
        
    }
    
    public function setIdade($idade){
        
        $this->idade = $idade;
        
    }
    
    public function getCurso(){
        
        return $this->curso;
        
    }
    
    public function setCurso($curso){
        
        $this->curso = $curso;
        
    }
    
    function info(){
        
        return "Meu nome é: " . $this->getNome(). "<br>" .
                "Minha idade é: " . $this->getIdade(). "<br>" .
                "Meu curso é: " . $this->getCurso() . "<br>";
        
    }
    
}

