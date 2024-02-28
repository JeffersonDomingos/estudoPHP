<?php

require 'Aluno.php';

$aluno = new Aluno();
$aluno->setNome("Jefferson Domingos de Morais");
$aluno->setIdade("24");
$aluno->setCurso("Análise e Desenvolvimento de Sistemas");

echo $aluno->info();


?>