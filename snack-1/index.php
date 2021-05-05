<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 1</title>
    <style>

    /* CUSTOM FONT */
    @font-face { font-family:display; src: url('font/display.ttf'); }
    @font-face { font-family:simbols; src: url('font/simbols.ttf'); } 
    @font-face { font-family:display; font-weight: bold; src: url('font/display.ttf');}
    @font-face { font-family:simbols; font-weight: bold; src: url('font/simbols.ttf');}

        /* GENERAL RULES */
        * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        }

        body {
        background-color: #000;
        }

        h1 {
        padding-top: 50px;
        margin-bottom: 30px;
        font-size: 3em;
        color: red;
        text-align: center;
        font-family: display, simbols, sans-serif;
        }

        .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 80vh;
        }

        .match {
        display: flex;
        flex-wrap: wrap;
        width: 500px;
        height: 240px;
        padding: 20px;
        margin: 5px;
        color: #fff;
        font-size: 2em;
        background-color: #121212;
        background-image: url("https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fcdn.1001freedownloads.com%2Fvector%2Fthumb%2F121047%2Fartonomics-led-signboard.png&f=1&nofb=1");
        background-size: cover;
        }

        .team, .gamepoints {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-basis: 50%;
        font-family: display, simbols, sans-serif;
        }

        .team {
        font-weight: bold;
        font-size: 30px;
        color: red;
        }
    </style>
</head>
<body>

    <?php
        // GOAL:
        ## Snack 1
        // Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. 
        // Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
        // Stampiamo a schermo tutte le partite con questo schema.

        $matches = [

            [
                "home" => "Olimpia-Milano",
                "guest" => "Cantu",
                "HomeGamePoints" => 55,
                "GuestGamePoints" => 60
            ],

            [
                "home" => "Pistoia-Basket",
                "guest" => "Varese",
                "HomeGamePoints" => 198,
                "GuestGamePoints" => 31
            ],

            [
                "home" => "Venezia",
                "guest" => "Bologna",
                "HomeGamePoints" => 86,
                "GuestGamePoints" => 77
            ],

            [
                "home" => "Sassari",
                "guest" => "Avellino",
                "HomeGamePoints" => 70,
                "GuestGamePoints" => 85
            ],

            [
                "home" => "Brindisi",
                "guest" => "Virtus-Roma",
                "HomeGamePoints" => 86,
                "GuestGamePoints" => 99
            ],
        ];
    ?>

    <h1>SCOREBOARD</h1>
    <div class="container">
            <?php

                for ($i=0; $i<count($matches); $i++) {
                    $match = $matches[$i];
                    echo "
                        <div class='match'>
                            <div class='team'>"
                                . $match['home'] 
                            . "</div> 
                            <div class='team'>"
                                . $match['guest']
                            . "</div> 
                            <div class='gamepoints'>"
                                . $match['HomeGamePoints']
                            . "</div> 
                            <div class='gamepoints'>"
                                . $match['GuestGamePoints']
                            . "</div>"
                        . "</div>";
                }
            ?>
    </div>
</body>
</html>