<?php

class Maze {
    public $rowCount = 10; 
    public $colCount = 10;

    public $allDirection = ["up","right","down", "left"];

    public $direction = "up";

    public $maze = [
        ['x' => 10, 'y' => 5], ['x' => 9, 'y' => 5],['x' => 8, 'y' => 5],
        ['x' => 8, 'y' => 6],['x' => 8, 'y' => 7],['x' => 7, 'y' => 7],
        ['x' => 7, 'y' => 8],['x' => 7, 'y' => 9],['x' => 8, 'y' => 9],
        ['x' => 6, 'y' => 7],['x' => 6, 'y' => 6],['x' => 6, 'y' => 5],
        ['x' => 6, 'y' => 4],['x' => 6, 'y' => 3],['x' => 7, 'y' => 3],
        ['x' => 8, 'y' => 3],['x' => 8, 'y' => 2],['x' => 5, 'y' => 4],
        ['x' => 4, 'y' => 4],['x' => 4, 'y' => 5],['x' => 4, 'y' => 6],
        ['x' => 3, 'y' => 6],['x' => 3, 'y' => 7],['x' => 3, 'y' => 8],
        ['x' => 3, 'y' => 9],['x' => 2, 'y' => 9],['x' => 2, 'y' => 6],
        ['x' => 2, 'y' => 5],['x' => 2, 'y' => 4],['x' => 1, 'y' => 4]
    ];

    public $player = ['x' => 10, 'y' => 5];

    /**
     * Отрсовываем лабиринт
     */
    function renderTable(){
        $table = "<table>";
        for ($x=1; $x <= $this->rowCount; $x++) { 
            $table .= "<tr>";
            for ($y=1; $y <= $this->colCount ; $y++) { 
                $cell = ['x'=> $x, 'y' => $y];
                if($cell == $this->player){
                    $table .= "<td class=\"player\"></td>";
                }else if(in_array($cell, $this->maze)){
                    $table .= "<td class=\"maze\"></td>";
                }else{
                    $table .= "<td></td>";
                }  
            }
            $table .= "</tr>";
        }
        $table .= "</table>";
        
        echo $table;
    }

    /**
     * Получаем координаты следующей клетки
     */
    function getNextCell($cell){
        switch ($this->direction) {
            case 'up':
                $cell['x']--;
                break;
            case 'right':
                $cell['y']++;
                break;
            case 'left':
                $cell['y']--;
                break;
            case 'down':
                $cell['x']++;
                break;
        }   
        return $cell;
    }
    
    /**
     * Пытаемся повернуть направо, чтобы проверить есть ли там стена
     */
    function turnRight (){
        $index = array_search($this->direction, $this->allDirection);
        if($index == 3){
            $this->direction = $this->allDirection[0];
        } else{
            $this->direction = $this->allDirection[++$index];
        }
    }

    /**
     * Меняем направление
     */
    function changeDirection (){
        $index = array_search($this->direction, $this->allDirection);
        if($index == 0){
            $this->direction = $this->allDirection[3];
        } else{
            $this->direction = $this->allDirection[--$index];
        }
    }
    
    /**
     * Проверяем можем ли мы сделать шаг
     */
    function isMaze($cell){
        return in_array($cell, $this->maze);
    }
    
    /**
     * Передвигаем игрока
     */
    function makeStep($cell){
        $this->player = $cell; 
    }

    /**
     * Проверяем есть ли выход
     */
    function isExit(){
        return $this->player == $this->maze[count($this->maze) -1];
    }

    /**
     * Логика каждого шага
     */
    function step(){
        $this->renderTable(); 
        echo "<p> Координаты игрока: x: {$this->player['x']}  y: {$this->player['y']} </p>";
        //Пытаемся повернуть направо
        $this->turnRight();  
        $cell = $this->getNextCell($this->player);
        //Если не выходит, меняем направление против часовой стрелки, пока не находим возможный вариант
        while(!$this->isMaze($cell)){
            $this->changeDirection();
            $cell = $this->getNextCell($this->player);
        }
        echo "<p> Делаем ход в направлении: {$this->direction}</p>";
        $this->makeStep($cell);
    }

    function game(){
        while(!$this->isExit()){
            $this->step();
        }
        $this->renderTable();
        echo "Лабиринт пройден!";
    }
}

$maze = new Maze();
$maze->game();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maze</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
</body>
</html>
