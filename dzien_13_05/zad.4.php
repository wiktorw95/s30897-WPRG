<!DOCTYPE html>
<html>
<head>
    <title>Zad.4</title>
</head>
<body>
<h2>Samogłoski</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="numbers">Wpisz tekst:</label><br>
    <input type="text" id="numbers" name="numbers"><br>
    <input type="submit" value="Submit">
</form>

<?php
function wyjmijsamogloski($input) {
    $samogloski = array("b", "c", "d", "f", "g", "h", "i", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "y", "z", "ą", "ę", "ż", "ć", "ó", "ź");

    $wynik = str_replace($samogloski, "", $input);

    return $wynik;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['numbers'];
    $Result = strlen(wyjmijsamogloski($input));
    echo "<p>Wynik: $Result</p>";
}
?>