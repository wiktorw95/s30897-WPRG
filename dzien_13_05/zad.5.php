<!DOCTYPE html>
<html>
<head>
    <title>Count Decimal Places</title>
</head>
<body>
<h2>Count Decimal Places</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="number">Enter a floating-point number:</label><br>
    <input type="text" id="number" name="number"><br>
    <input type="submit" value="Count Decimal Places">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];


    if (!is_numeric($number)) {
        echo "<p>Podany ciąg nie jest liczbą zmiennoprzecinkową</p>";
        exit;
    }

    else if (strpos($number, '.') === false) {
        echo "<p>Podana liczba nie zawiera części dziesiętnej</p>";
        exit;
    }

    $czesci = explode('.', $number);
    $wynik = strlen($czesci[1]);

    echo "<p>Wynik: $wynik </p>";

}


?>
</body>
</html>