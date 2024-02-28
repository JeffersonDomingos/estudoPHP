<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portugese");

date_default_timezone_set('America/Sao_Paulo'); 

$dia_hora = strtotime("now");
$hora = date("H:i:s");

echo (strftime("Hoje é %A do mês de %B.", $dia_hora));

echo "<br>";

echo "Horário: " . $hora;

?>