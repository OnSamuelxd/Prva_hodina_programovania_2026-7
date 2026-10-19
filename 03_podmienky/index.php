<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>podmienky</title>
</head>
<body>
    <?php
    //podmienky
    /*
    Podmienka je programovacia paradigma, pomocou ktorej sa rozhoduje, ktorý kód sa vykoná
    Podmienka obsahuje logický výraz, napr. J < 5

    Ak podmienka je splnená, tak sa vykoná kód uvedený pod touto podmienkou
    Ak podmienka nie je splnená, tak sa preskocí alebo sa vykoná kód v časti else

    Pri porovnávaní viacerých výrazov, používame príkaz else if

    Špeciálnou podmienkou v modernom programovaní je: switch
    */

    if( 1 < 5){
        echo "1 je menšie ako 5";
    }

    //Operátor
    /*
    == : rovná sa
    != : nerovná sa
    <= : menej alebo rovné
    >= : viac alebo rovné
    ! : negácia
    === : prirovnáva hodnotu aj dátový typ (2 === 2): pravda (2 !== "2"): nepravda
    */
    $číslo1 = 10;
    $číslo2 = 50;

    if( $číslo1 > $číslo2){
        echo "toto sa vykoná";
    }

    <echo "<br>";

    if( $číslo1 == $číslo2){
        echo "toto sa nevykoná";
    } else {
        echo "toto sa vykoná";
    }

    echo "<br>";

    //Úloha na precvičenie si podmienok
    /*
    Vytvorte podmienku, ktorá bude na základe počtu bodov, vypísovať vaše hodnotenie

    100-90: 1
    89-80: 2
    ...

    bonus: počet bodov bude definovaný náhodne pomocou funkcie random_int(min, max)
    */

    $známka = random_int(0, 100);
    if ($známka >= 90){
        echo "1";
    } else if ($známka >= 80){
        echo "2";
    } else if ($známka >= 70){
        echo "3";
    } else if ($známka >= 60){
        echo "4";
    } else {
        echo "5";
    }

    //Úloha na precvičenie si podmienok 2
    /*
    Vstup na party
    vstup na party je podmienený niekolkými podmienkami:
    1. vstup na párty je od 18 rokov
    2. Pokiaľ je party v SNV, tak od 15 rokov
    3. Učastník musí mať slušne oblečenie, ak nie, tak smola 
    4. Ak si bol v base, tak máš zákaz vstupu na párty
    5. Ak máte súhlas zakonného zástupce, môžete vstúpiť na párty od 10 rokov
    */
    $mojVek = 31;
    $miestoParty = "Poprad;"
    $slusneOblecenie = true;
    $suhlasZakonnehoZastupcu = false;
    $somVBase = false;
    if(slusneOblecenie == true || $somVBase == false){
        if($mojVek >= 18){
        echo "Go Party!";
        } else if ($miestoParty == "SNV" && $mojVek >= 15){
        echo "Go Party!";
        }else if ($suhlasZakonnehoZastupcu == true && $mojVek >= 10){
        echo "Go Party!";
        } else {
            echo "Žiadna Party";
        }
    }
    ?>
</body>
</html>