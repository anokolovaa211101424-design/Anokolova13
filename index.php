<?php

require 'vendor/autoload.php';

use Anna\Lab13\Hello;
use Anna\Lab13\TimeApp;
use Anna\Lab13\MathApp;

$hello = new Hello();
$time = new TimeApp();
$math = new MathApp();

echo "<h2>Hello App</h2>";
echo $hello->greet("Анна") . "<br>";
echo $hello->greet("Вася") . "<br>";

echo "<h2>Time App</h2>";
echo "Поточна дата і час: " . $time->getCurrentDate() . "<br>";

echo "<h2>Math App</h2>";
echo "Сума 10 + 20 = " . $math->sum(10, 20) . "<br>";
echo "Факторіал 5 = " . $math->factorial(5);