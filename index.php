<?php


$rowCount = 10; 
$colCount = 10;

$allDirection = ["up","right","down", "left"];

$direction = "up";

$maze = [
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

$player = ['x' => 10, 'y' => 5];

$table = "<table>";
for ($x=1; $x <= $rowCount; $x++) { 
    $table .= "<tr>";
    for ($y=1; $y <= $colCount ; $y++) { 
        $cell = ['x'=> $x, 'y' => $y];
        if($array == $player){
            $table .= "<td class=\"player\"></td>";
        }else if(in_array($cell, $maze)){
            $table .= "<td class=\"maze\"></td>";
        }else{
            $table .= "<td></td>";
        }  
    }
    $table .= "</tr>";
}
$table .= "</table>";

echo $table;
echo "<p> Координаты игрока: x: {$player['x']}  y: {$player['y']} </p>";

function getRightCell($cell, $direction){
    switch ($direction) {
        case 'up':
            $cell['y']++;
            break;
        case 'right':
            $cell['x']++;
            break;
        case 'left':
            $cell['x']--;
            break;
        case 'down':
            $cell['y']--;
            break;
    }   
    return $cell;
}

$turnRight = function()use(&$direction, $allDirection){
    $index = array_search($direction, $allDirection);
    if($index == 3){
        $direction = $allDirection[0];
    } else{
        $direction = $allDirection[++$index];
    }
};

function isMaze($cell, $maze){
    return in_array($cell, $maze);
}



print_r(getRightCell($player, $direction));
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
