<?php
    session_start();
?>

<style>
    .stileTabella {
        border: black, solid, 2px;
        border-collapse: collapse;
    }

</style>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RISULTATI</title>
    </head>
    <body>
        <table class="stileTabella">
            <tr>
                <th class="stileTabella">N° di invii della recensione</th>
                <th class="stileTabella">Ultima data</th>
            </tr>
        <?php
            echo "<tr><td class='stileTabella'>" . $_SESSION["nInvii"] . "</td><td class='stileTabella'>" . $_SESSION["data"] . "</td></tr>";
            echo "</table>";
            echo "<ul>";
            $tot = 0;
            foreach ($_SESSION["voti"] as $voto) {
                echo "<li>$voto</li>";
                $tot += $voto;
            }
            echo "</ul>";
            echo "<h3>Media: " . round ($tot / count($_SESSION["voti"]), 2) . "</h3>";
        ?>
        <a href="presentazione.html">Ritorna alla pagina recensioni</a>
    </body>
</html>