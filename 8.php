<?php

$age = "testing";

if (is_int($age) && $age >= 0) {
    if($age >= 18 && $age <= 59) {
        echo "Вам еще работать и работать";
    } else if($age > 59) {
        echo "Вам пора на пенсию";
    } else {
        echo "Вам еще рано работать";
    }
} else {
    echo "Неизвестный возраст";
}
