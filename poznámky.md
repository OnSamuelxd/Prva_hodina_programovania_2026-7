php slon

-- Architektúra a princíp fungovania PHP --

PHP (Hypertext Preprocessor) je open source skriptovací jazyk bežiaci na strane servera

Architektúra Klient-Server: kód sa vokoná na serveri a klientovi (prehliadaču) sa odošle už len vygenerovaný a čistý HTML, CSS alebo ISON výstup

Tvorba dynamických webových aplikácií, API rozhraní, komunikácia a databázami a spracovanie formulárov

-- Výstup, Premenné a Dátové typy --

Výstup (PHP Echo / print) Na zobrazenie dát klientovi sa používajú konštrukcie echo a print. V praxi sa preferuje echo, pretože je o zlomok rýchlejšie a dokáže prijať viacero parametrov naraz

Premmenné (PHP Variables) Deklarujú sa znakom dolára a musia začínať písmenom alebo podčiarkovníkom. PHP je dynamický typovaný jazyk, typ premennej určí samo podľa priradenej hodnoty

Dátové typy (PHP data types) medzi základné patria String (text), Integer (celé číslo), Float (desatinné číslo) a Boolean (pravda/nepravda)

/ bodka je na spájanie textu s premennou /

-- Dáta a pretypovanie --

Práca s reťazcami (PHP String): Text v PHP vieme nielen spájať, ale aj upravovať pomocou stoviek zabudovaných funkcií (napr. zistenie dĺžky, vyhľadávanie podreťazca, nahradzovanie slov...)

Čísla a Matematika (PHP numbers, math): Okrem základných operácií ponúka PHP funkcie pre zaokruhľovanie (round()), generovanie náhodných čísel, (rand()) alebo hľadanie min/max hodnôt

Pretypovanie (PHP Casting): Process, kedy explicitne poviemeprogramu, aby zmenil dátový tup premennej

-- Konštanty a Operátory --

Konštanty (PHP Constants): Identifikátory pre hodnoty, ktoré sa na rozdiel od premenných počas behu skriptu nesmú a nedajú zmenit, ideálne pre prístupové heslá alebo fixné nastavenia

Operátory (PHP Operators): Nástroje na manipuláciu s dátami - aritmetické (matematika), priraďovacie, porovnávacie a logické 