<?php
    $task3 = "Задание 3";
    $task2 = "Задание 2";
    $task1 = "Задание 1";
    $title = "lesson1";
    $data = date("Y");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>   
</head>
<body>
    <h1>Домашняя работа №1</h1>
    <h2> <?= $task3 ?></h2>   
    <div>
        <?php
            $a = 5;
            $b = '05';
            var_dump( $a == $b );  //Почему true? Срабатывает приведение типов, '05' преобразуется в число, то есть 5
            var_dump (( int ) '012345' ); // Почему 12345? Преобразуется в число, первый нолик у числа отбрасывается
            var_dump (( float ) 123.0 === ( int ) 123.0 ); // Почему false? происходить сравнение и типов тоже
            var_dump (( int ) 0 === ( int ) 'hello, world' ); // Почему true? ( int ) 'hello, world' равно 0 
        ?>
    </div>

    <h2> <?= $task1?></h2> 

    <p>Текущий год: <?= $data ?></p>

    <h2> <?= $task2 ?></h2>

    <p> Начальное значение: a = <?= $a ?>  b = <?= $b?> </p>

    <?php    
        $b = ($a += $b) - $b;
        $a -= $b; 
    ?>
        
    <p><?= "Итог: a = {$a}   b =  {$b}" ?> </p>
</body>
</html>
