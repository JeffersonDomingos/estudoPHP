<?php

require 'Carro.php';

$gol = new Carro();

$gol->setModelo("Meriva");
$gol->setAno("2008");
$gol->setMotor("1.9");

echo $gol->exibir();


?>