<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson_6</title>
</head>
<body>
    <h2 name="form1" >Калькулятор №2</h2>
    <form class="calc" action="" method="post">
        <label >X = <input name="number1" value="" type="text"/></label>
        <label >Y = <input name="number2" value="" type="text"/></label>
        <input name="operation" value="+" type="submit"/>
        <input name="operation" value="-" type="submit"/>
        <input name="operation" value="*" type="submit"/>
        <input name="operation" value="/" type="submit"/>
    </form>

    <h3><?=$result2?></h3>

</body>
</html>