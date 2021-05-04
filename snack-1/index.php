<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 1</title>
    <style>
        /* GENERAL RULES */
        * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        }

        .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        }

        .match {
        display: flex;
        flex-wrap: wrap;
        width: 300px;
        padding: 20px;
        margin: 5px;
        background-color: red;
        color: white;
        }

        .team, .gamepoints {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-basis: 50%;
        }

        .team {
        font-weight: bold;
        font-size: 25px;
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
                "home" => "Olimpia Milano",
                "guest" => "Cantù",
                "HomeGamePoints" => 55,
                "GuestGamePoints" => 60
            ],

            [
                "home" => "Pistoia Basket",
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
                "guest" => "Virtus Roma",
                "HomeGamePoints" => 86,
                "GuestGamePoints" => 99
            ],
        ];
    ?>

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