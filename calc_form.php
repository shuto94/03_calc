<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算アプリ</title>
</head>
<body>
    <h1>計算アプリ</h1>
    <h2>計算式を入力してください</h2>
    <form action="answer.php" method="POST">
        <input name="num1" type="number" required>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="×">×</option>
            <option value="÷">÷</option>
        </select>
        <input name="num2" type="number" required>
        <input type="submit" value="計算">
    </form>
</body>
</html>