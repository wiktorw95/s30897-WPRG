<?php
    function suma_cyfr($liczba)
    {
        while($liczba>10) {
            $wynik = 0;
            for ($i = 0; $i < strlen($liczba); $i++) {
                $tab[$i] = $liczba % 10;
                $wynik = $wynik + $tab[$i];
                $liczba = $liczba / 10;
            }
            $liczba = $wynik;
        }
        return $wynik;

    }

    $liczba = 123456;
    echo(suma_cyfr($liczba). "\n");

?>