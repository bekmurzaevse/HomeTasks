<?php

define('PI', 3.14159);

function calculateCircleArea($radius) {
    // return PI * $radius ** 2;
    return PI * pow($radius, 2);
}

echo calculateCircleArea(5);

/**
 * 
 */

 echo '<br>';
 echo '<br>';

$name = 'Иван';
$age = 25;

echo "Меня зовут " . $name . ", мне ". $age ." лет, и я программист.";

/**
 * 
 */

echo '<br>';
echo '<br>';

function calculate($a, $b) {
    return "Сумма: " . $a + $b .'<br>' . 
    "Разность: " . $a - $b . '<br>' . 
    "Произведение: " . $a * $b . '<br>' . 
    "Частное: " . $a / $b;
}

echo calculate(10, 5);

/**
 * 
 */

 echo '<br>';
 echo '<br>';

define('LENGTH', 10);
define('WIDTH', 5);

function calculateRectangle() {
    // Ваш код здесь
    return "Площадь прямоугольника : " . LENGTH * WIDTH . '<br>' . 
    "Периметр прямоугольника : " . 2 * (LENGTH + WIDTH);
}

echo calculateRectangle(); 

/**
 * 
 */

 echo '<br>';
 echo '<br>';

 function mathOperations($a, $b) {
    // Ваш код здесь
    return "Сумма чисел $a и $b = " . $a + $b . " <br>
        Разность чисел $a и $b = " . $a - $b . " <br>
        Произведение чисел $a и $b = " . $a * $b . " <br>
        Частное чисел $a и $b = " . $a / $b;
}

echo mathOperations(7, 3);

