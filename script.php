<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            if (!isset($_SESSION["nInvii"])) {
                $_SESSION["nInvii"] = 0;
                $_SESSION["voti"] = array();
            }
            $_SESSION["nInvii"]++;
            array_push($_SESSION["voti"], $_POST["voto"]);
            $_SESSION["data"] = $_POST["data"];
            echo "<a href='presentazione.html'>Ritorna alla pagina recensioni</a>";
        ?>
    </body>
</html>