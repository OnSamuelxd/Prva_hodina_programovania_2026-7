<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premenne</title>
</head>
<body>
    <h1>Tento web je zameraný na premenné</h1>

    <?php 
        echo "<p>", 2 + 4 , "</p>";

        //priradenie hodnoty do premennej
        $cislo = 5;

        //vypisanie hodnoty premennej
        echo $cislo;

        echo "<br>";

        $desCislo = 4.2;
        echo $desCislo;

        $cislo1 = 4.3;
        $cislo2 = 5.7;

        //pretypovanie cisiel
        $vysledok = (int)$cislo1 + (int)$cislo2;
        echo $vysledok;

        echo "<br>";

        $text = "toto je moj text";
        echo $text;

        echo "<br>";

        $textCislo = "toto je moje cislo: " . $cislo;
        echo $textCislo;

        echo "<br>";
        $pravdivost = true;
        echo $pravdivost;
    ?>
</body>
</html>