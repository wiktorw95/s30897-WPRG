<html>
<head>
    <style>
        h1 {
            text-align: center;
        }
        body {
            text-align: center;
            background-color: white;
            color: #fff;
        }
        fieldset{
            background-color: gray;
            border-radius: 5px;
        }
    </style>
    <title>Zad.3</title>
</head>
<fieldset>
    <h1>Aplikacja</h1>
    <hr>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="formularz">
        <label>Podaj tekst: </label>
        <input type="text" id="text "name="text"><br>
        <select id="opcje" name="opcje">
            <option value=1>Odwrócenie ciągów znaków</option>
            <option value=2>Zamiana wszystkich liter na wielkie</option>
            <option value=3>Zamiana wszystkich liter na małe</option>
            <option value=4>Liczenie liczby znaków</option>
            <option value=5>Usuwanie białych znaków z początku i końca ciągu</option>
        </select>
        <input type="submit" value="Wykonaj">
        </div>
    </form>
    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tekst = $_POST['text'];
        $opcje = $_POST['opcje'];
        if($tekst == ""){
            echo "<p>Podaj tekst!</p>";
        }
        else {
            if ($opcje == 1) {
                $tekst = strrev($tekst);
                echo "<p>rev: $tekst</p>";
            }
            if ($opcje == 2) {
                $tekst = strtoupper($tekst);
                echo "<p>strtoupper: $tekst</p>";
            }
            if ($opcje == 3) {
                $tekst = strtolower($tekst);
                echo "<p>strtolen: $tekst</p>";
            }
            if ($opcje == 4) {
                $tekst = strlen($tekst);
                echo "<p>len: $tekst</p>";
            }
            if ($opcje == 5) {
                $tekst = trim($tekst);
                echo "<p>trim: $tekst</p>";
            }
        }
    }
    ?>
</fieldset>
</body>
</html>
