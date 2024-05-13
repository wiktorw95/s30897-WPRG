<!DOCTYPE html>
<html>
<head>
    <title>Zad.5</title>
</head>
<body>
<h2>Liczby zmiennoprzecinkowe</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="number">Wpisz liczbe:</label><br>
    <input type="text" id="number" name="number"><br>
    <input type="submit" value="Submit">
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