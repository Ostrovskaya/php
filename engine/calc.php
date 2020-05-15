<?php
$result = 'Введите значения аргументов';


$operation = mb_substr($_POST['operation'],0,1) ;
$num1 = $_POST['number1'];
$num2 = $_POST['number2'];

if ($num1 != "" || $num2 != "") { 
    $result = $num1 . ' ' . $operation . ' ' . $num2 . ' = ';

    switch ($operation) {
        case '+':
            $result .= $num1 + $num2;
            break;
        case '-':
            $result .= $num1 - $num2;
            break;
        case '*':
            $result .= $num1 * $num2;
            break;
        case '/':
            if ($num2 == 0) {
                return "Деление на 0!";
            } else {
                $result .= $num1 / $num2;
                break;
            }                           
    }
} 

   
return $result;



