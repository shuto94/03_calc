<?php
$num1 = '';
$num2 = '';
$operator = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    switch ($operator) {
    case '+':
        $answer = $num1 + $num2;
        break;
    case '-':
        $answer = $num1 - $num2;
        break;
    case '×':
        $answer = $num1 * $num2;
        break;
    case '÷':
        $answer = $num1 / $num2;
        break;
    }
}
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
<p><?= $num1 . $operator . $num2 . '=' . $answer ?></p>
<a href="calc_form.php">戻る</a>
</body>
</html>