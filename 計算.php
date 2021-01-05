<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算</title>
</head>
<body>
    <form action="" method="POST">
    <input type="text" name="number1">
    <select name="keisan">
    <option value="plus">+</option>
    <option value="mainas">-</option>
    <option value="kakeru">×</option>
    <option value="waru">÷</option>
    </select>
    <input type="text" name="number2">
    <input type="submit">
    </form>
    <?php
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $keisan = $_POST["keisan"];
    switch($keisan){
        case "plus":
        $result = $number1 + $number2; 
        break;
        case "mainas":
        $result = $number1 - $number2;
        break;
        case "kakeru":
        $result = $number1 * $number2;
        break;
        case "waru":
        $result = $number1 / $number2;
        break;
    }
    echo $result;
    ?>
</body>
</html>