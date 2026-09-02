<!DOCTYPE html>
<html>
<head>
    <title>Nearest to 100</title>
</head>
<body>

<h2>Find the Number Nearest to 100</h2>

<form method="post">
    Enter First Number:
    <input type="number" name="num1" required><br><br>

    Enter Second Number:
    <input type="number" name="num2" required><br><br>

    <input type="submit" name="submit" value="Check">
</form>

<?php
if (isset($_POST['submit'])) {

    $a = $_POST['num1'];
    $b = $_POST['num2'];

    $diffA = abs(100 - $a);
    $diffB = abs(100 - $b);

    if ($diffA == $diffB) {
        echo "<h3>Output: 0</h3>";
    }
    elseif ($diffA < $diffB) {
        echo "<h3>Output: $a is nearest to 100</h3>";
    }
    else {
        echo "<h3>Output: $b is nearest to 100</h3>";
    }
}
?>

</body>
</html>