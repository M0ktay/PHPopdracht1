<html>
    <!-- Dit is nodig om style in te openen je kan hier ook de title van de site aanpassen of CDN linkjes in plakken als je bijv. bootstrap wilt gebruiken -->
    <head>
        <!-- hierin style ik de container waar alle variables in zitten -->
        <style>
            /* Naam van de container die gestyled word */
            .container{
                background-color: blue;
                border: 6px solid lightblue;
                border-radius: 33px;
                padding: 20px;
                color: white;
                text-align: center;
                word-break: break-word;
                font-size: 20px;
            }

        </style>
    </head>
    <!-- Hier zit alles wat je op de site ziet -->
    <body>
        <!-- de div die alle variables houd -->
        <div class="container">
            <?php

                // de variable houd mijn naam vast en word daarna ge echod op de site
                $naam = 'Meric';
                echo "$naam <br>";

                // de variable houd mijn achternaam vast en word daarna ge echod op de site
                $achternaam = 'Oktay';
                echo "$achternaam <br>";

                // de variable houd mijn geboortedatum vast en word daarna ge echod op de site
                $geboorteDatum = '18-01-2002';
                echo "$geboorteDatum <br>";

                // de variable houd mijn adres vast en word daarna ge echod op de site
                $adres = 'Winterkoning, Soest';
                echo "$adres <br>";

                // de variable houd mijn animes vast en word daarna ge echod op de site
                $animes = [
                    "Dragon ball",
                    "One Piece",
                    "Bleach",
                    "Naruto",
                    "Tokyo Ghoul",
                ];
                print_r($animes);
                
                // de variable houd mijn email vast en word daarna ge echod op de site
                $email = 'mericoktay9@gmail.com';
                echo "<br> $email <br>";
                
                // ik haal hier eerst de tijzone  op en maak daarna een variable van de datum en echo die naar de site uiteindelijk
                date_default_timezone_set('Europe/Amsterdam');
                $date = date('l jS \of F Y') . "<br>";
                echo $date;
                
                // ik haal hier eerst de tijzone op en maak daarna een variable van de tijd en echo die naar de site uiteindelijk
                date_default_timezone_set('Europe/Amsterdam');
                $time = date('H:i:s');
                echo $time;

                // de variable houd mijn leeftijd vast en word daarna ge echod op de site
                $leeftijd = '21';
                echo "<br> $leeftijd <br>";

                // de variable bekijkt of ik getrouwt ben met true or false en print daarna een 1 of 0 uit maar door de if statement word het tekst.
                $isMarried = false;

                // Deze if zorgt ervoor dat als ik getrouwd ben er staat dat ik getrouwd ben en dat er niet een 1 staat en als ik niet ben getrouwd zegt die dit ook
                if($isMarried == 1){
                    echo "$naam" . " " . "is getrouwd";
                }else{
                    echo "$naam " . " " ."is niet getrouwd";
                }

                // Hier laat ik de if kijken hoelaat het is en als het bijv. 14:00 is dan is de achtergrond van de site oranje maar na 18:00 word het rood en 
                if($time < 120000){
                    echo "<body style='background-color:orange'>";
                }elseif($time < 180000){
                    echo "<body style='background-color:red'>";
                }else{
                    echo "<body style='background-color:black'>";
                }
            ?>
        </div>
    </body>
</html>
