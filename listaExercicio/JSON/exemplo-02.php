<?php

$json = '[{"nome":"Jefferson","idade":24},{"nome":"Gislene","idade":"24"}]';

$data = json_decode($json, true);

var_dump($data);

?>