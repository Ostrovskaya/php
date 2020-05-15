<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson_6</title>
</head>
<body>
    <h2>Калькулятор №1</h2>
    <form nane="calc1" class="calc" action="" method="post">
        <input name="number1" value="" type="text"/>
        <select name="operation" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input name="number2" value="" type="text"/>
        <input name="submit" type="submit" value="Посчитать">
    </form>

    <h3><?=$result1?></h3>

</body>
</html>