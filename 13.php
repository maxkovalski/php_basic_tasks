<?php

$s = 250;
$t = 3;
$kmSpeed = round($s/$t, 2);
$mSpeed = round(($s * 1000)/($t * 60), 0);
echo "Скорость автомобиля - $kmSpeed км/ч или $mSpeed м/с";