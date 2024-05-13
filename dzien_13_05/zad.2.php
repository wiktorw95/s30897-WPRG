<!DOCTYPE html>
<html>
<head>
    <title>Zad.2</title>
</head>
<body>
<h2>Usuwanie niepotrzebnych znaków</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="numbers">Wpisz tekst:</label><br>
    <input type="text" id="numbers" name="numbers"><br>
    <input type="submit" value="Submit">
</form>

<?php
function usuwanie($input) {
    $unwanted_chars = array("\\", "/", ":", "*", "?", "\"", "<", ">", "|", "+", "-", ".");

    $wynik = str_replace($unwanted_chars, "", $input);

    return $wynik;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['numbers'];
    $Result = usuwanie($input);
    echo "<p>Wynik: $Result</p>";
}
?>
</body>
</html>