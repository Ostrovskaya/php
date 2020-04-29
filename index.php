<?php
echo "<h2>Задание 1</h2>";

$a = rand(-100, 100);
$b = rand(-100, 100);

echo "<p> a = $a   b = $b </p>";

function operation($a, $b) {

    if ($a >= 0 && $b >= 0) {
        $result = $a - $b;
    } elseif ($a < 0 && $b < 0) {
        $result = $a * $b;
    } else {
        $result = $a + $b;
    }
    return $result;
}

echo "<p> Результат: " . operation($a, $b) . "</p>";

echo "<h2>Задание 3</h2>";

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    return $a / $b;
}

function add($a, $b) {
    return $a + $b;
}

function diff($a, $b) {
    return $a - $b;
}



function mathOperation($arg1, $arg2, $operation){
    switch ($operation) {
        case "multiplication":
            return multiply($arg1, $arg2);
        case "division":
            return divide($arg1, $arg2);
        case "addiction":
            return add($arg1, $arg2);
        case "difference":
            return diff($arg1, $arg2);
    }
}

echo "<p> Сумма: " . mathOperation($a, $b, 'addiction') . "</p>";
echo "<p> Разность: " . mathOperation($a, $b, 'difference') . "</p>";
echo "<p> Умножение: " . mathOperation($a, $b, 'multiplication') . "</p>";
echo "<p> Деление: " . round(mathOperation($a, $b, 'division'), 2) . "</p>";

?>
<h2>Задание 5</h2>
<footer>
	Copyright &copy; Elena Ostrovskaya <?= date("Y");?> 
</footer>
<?php

echo "<h2>Задание 6</h2>";

function power($val, $pow){
    if($pow == 1){
        return $val;
    }
    return $val * power($val, $pow - 1);
}
$val = rand(1, 10);
$pow = rand(1, 10);

echo "<p> Число: = $val   Степень: = $pow </p>";
echo "<p> Результат: " . power($val, $pow) . "</p>";

echo "<h2>Задание 7</h2>";

function getTime() {
    $hour = date('H');
    $minutes = date('i');
    switch (+$hour) {
        case 1:
        case 21:       
            $hour .= " час";
            break;
        case 2:
        case 3:
        case 4:
        case 22:
        case 23:
            $hour .= " часа";
            break;
        default:
            $hour .= " часов";
    }
    
    switch (+$minutes % 10) {
        case 1:
            $text = " минута";
            break;
        case 2:
        case 3:
        case 4:
            $text = " минуты";
            break;
        default:
            $text = "минут";
    }
    switch(+$minutes){
        case 11:
        case 12:
        case 13:
        case 14:
            $text = "минут";  
    }
    $minutes .= $text;

    echo "<p> $hour  $minutes </p>";

}
getTime();

?>