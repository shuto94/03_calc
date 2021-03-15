<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];

$addition = $num1 + $num2;
$subtraction = $num1 - $num2;
$multiplication = $num1 * $num2;
$division = $num1 / $num2;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算アプリ</title>
</head>
<body>
    <h1>計算結果</h1>
<?php
    switch ($operator) {
    case '+':
        echo "{$num1} + {$num2} = {$addition}";
        break;
    case '-':
        echo "{$num1} - {$num2} = {$subtraction}";
        break;
    case '×':
        echo "{$num1} × {$num2} = {$multiplication}";
        break;
    default:
        echo "{$num1} ÷ {$num2} = {$division}";
        break;
}
?>
<br>
<a href="calc_form.php">戻る</a>
</body>
</html>