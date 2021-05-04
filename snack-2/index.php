<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 2</title>
</head>
<style>
      body {
        background-color: black;
      }
      .container {
        width: 80%;
        margin: auto;
      }
      .accepted {
        color: #7FFF00;
      }
      .nope {
        color: red;
      }

</style>
<body>

    <div class="container">
        <?php

            ## Snack 2
            // Passare come parametri GET name, mail e age e verificare (cercando i metodi
            // che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
            //  che mail contenga un punto e una chiocciola e che age sia un numero. 
            // Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
            

            // FULL URL (ADD TO LOCALHOST)
            //?name=Giovanni&mail=giovannibernardi13@gmail.com&age=22

            //Name=  Giovanni
            //Email= giovannibernardi13@gmail.com
            //Age=   22

            $name = $_GET['name'];
            $eMail = $_GET['mail'];
            $age = $_GET['age'];
            $at = strpos($eMail, '@');
            $dot = strpos($eMail, '.');

            if (strlen($name) > 3 && is_numeric($age) && $dot != false && $at != false) {
                echo 
                "<h1 class='accepted'>
                Accesso riuscito
                </h1>";

            } else {
                echo "<h1 class='nope'>
                Accesso negato
                </h1>";
            }
        ?>
    </div>
</body>
</html>
