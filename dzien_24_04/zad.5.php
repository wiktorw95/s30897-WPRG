<!DOCTYPE html>
<html lang="an">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator</title>
    <style>
        h2 {
            text-align: center;
        }
        body {
            text-align: center;
            background-color: white;
            color: #fff;
        }
        fieldset{
            background-color: black;
            border-radius: 5px;
        }

        .kalkulator {
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #222;
            width: 300px;
        }

        input[type="number"], select {
            margin-bottom: 10px;
            padding: 8px;
            width: 50%;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: white;
            color: black;
        }

        button {
            background-color: #c6c6c6;
            color: black;
            margin: 10px;
            padding: 10px 20px;
            width: 100px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #5c5c5c;
        }

        input[type="text"] {
            margin-top: 10px;
            padding: 8px;
            width: 50%;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
<fieldset>
<h2>Kalkulator</h2>
    <hr>
<div class="kalkulator">
    <h2>Prosty</h2>
    <hr>
    <input type="number" id="num1" placeholder="Wpisz liczbę">
    <input type="number" id="num2" placeholder="Wpisz liczbę">
    <select id="operator">
        <option value="add">Dodawanie (+)</option>
        <option value="subtract">Odejmowanie (-)</option>
        <option value="multiply">Mnożenie (*)</option>
        <option value="divide">Dzielenie (/)</option>
    </select>
    <button onclick="Prosty()">Oblicz</button>
    <hr>
    <h2>Zaawansowany</h2>
    <input type="number" id="num3" placeholder="Wpisz liczbę">
    <select id="operatorZaawansowany">
        <option value="cos">Cosinus</option>
        <option value="sin">Sinus</option>
        <option value="tan">Tangens</option>
        <option value="binToDec">Binarne na dziesiętne</option>
        <option value="decToBin">Dziesiętne na binarne</option>
        <option value="decToHex">Dziesiętne na szesnastkowe</option>
        <option value="hexToDec">Szesnastkowe na dziesiętne</option>
    </select>
    <button onclick="Zaawansowany()">Oblicz</button>
</div>
    <input type="text" id="wynik" placeholder="Wynik" readonly>
</fieldset>

<script>
    function Prosty() {
        const liczba1 = parseFloat(document.getElementById('num1').value);
        const liczba2 = parseFloat(document.getElementById('num2').value);
        const operator = document.getElementById('operator').value;
        let wynik;

        switch(operator) {
            case 'add':
                wynik = liczba1 + liczba2;
                break;
            case 'subtract':
                wynik = liczba1 - liczba2;
                break;
            case 'multiply':
                wynik = liczba1 * liczba2;
                break;
            case 'divide':
                if(liczba2 !== 0) {
                    wynik = liczba1 / liczba2;
                } else {
                    wynik = "Nie można dzielić przez zero!";
                }
                break;
            default:
                wynik = "Niepoprawny operator";
        }

        document.getElementById('wynik').value = wynik;
    }

    function Zaawansowany() {
        const liczba3 = parseFloat(document.getElementById('num3').value);
        const operator = document.getElementById('operatorZaawansowany').value;
        let wynik;

        switch(operator) {
            case 'cos':
                wynik = Math.cos(stopnieNaRadiany(liczba3));
                break;
            case 'sin':
                wynik = Math.sin(stopnieNaRadiany(liczba3));
                break;
            case 'tan':
                wynik = Math.tan(stopnieNaRadiany(liczba3));
                break;
            case 'binToDec':
                wynik = parseInt(liczba3, 2);
                break;
            case 'decToBin':
                wynik = liczba3.toString(2);
                break;
            case 'decToHex':
                wynik = liczba3.toString(16);
                break;
            case 'hexToDec':
                wynik = parseInt(liczba3, 16);
                break;
            default:
                wynik = "Niepoprawny operator";
        }

        document.getElementById('wynik').value = wynik;
    }

    function stopnieNaRadiany(stopnie) {
        return stopnie * (Math.PI / 180);
    }
</script>
</body>
</html>
