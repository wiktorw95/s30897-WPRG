<!DOCTYPE html>
<html>
<head>
    <title>Zad.1</title>
</head>
<body>
<h2>Tekst w różnych wersjach</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="text">Wprowadź tekst:</label><br>
    <input type="text" id="text" name="text"><br>
    <input type="submit" value="Wynik">

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_text = $_POST['text'];

    $upper = strtoupper($input_text);
    echo "<p>Uppercasae: $upper</p>";
    $lower = strtolower($input_text);
    echo "<p>Lowercase: $lower</p>";
    $first_upper = ucfirst($input_text);
    echo "<p>First Uppercase: $first_upper</p>";
    $first_upper_of_each_word = ucwords($first_upper);
    echo "<p>First Uppercase: $first_upper_of_each_word</p>";
}
?>
</body>
</html>