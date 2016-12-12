<?php
$res = 'result';
if(isset($_GET['a']) && isset($_GET['b'])){
    $fNumb = +$_GET['a'];
    $sNumb = +$_GET['b'];
    $operations = ['+' => 1, '-' => 2, '*' => 3, '/' => 4, '%' => 5];
    $operator = $operations[$_GET['operator']];
    switch ($operator){
    case 1:
        $res = $fNumb + $sNumb;
        break;
    case 2:
        $res = $fNumb - $sNumb;
        break;
    case 3:
        $res = $fNumb * $sNumb;
        break;
    case 4:
        if ($sNumb != 0){
            $res = $fNumb / $sNumb;
        }
        break;
    case 5:
        if ($sNumb != 0){
            $res = $fNumb % $sNumb;
        }
        break;
    }
    if(!is_int($res)&& !is_float($res)) {
        $res = "Invalid result";
    }
}