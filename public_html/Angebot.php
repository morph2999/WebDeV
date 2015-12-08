<!DOCTYPE html>
<html>

    <head>
        <title>WebShop</title>

        <!-- Link zur css-Datei -->
        <link href="newcss.css" type="text/css" rel="stylesheet">

        <!-- link zur Javaskript-Datei -->
        <script language="javascript" type="text/javascript" src="javascript.js"></script>
        <meta charset="UTF-8">
    </head>

    <body>
        <div id="inhalt" style="background: rgba(225, 225, 225, 0.5);">    
            <table align="center">
                <?php
                $verbindung = mysql_connect("localhost", "root", "")//Passwort von deiner Datenbank (Xampp)
                        or die("keine Verbindung möglich.
                    Benutzername oder Passwort sind falsch");

                mysql_select_db("parfum")
                        or die("Die Datenbank existiert nicht.");

                $sqlcount = mysql_query("SELECT * FROM produkthe,produktda ORDER BY RAND() LIMIT 3");
                $count = 1;
                $Rabatt = 48;
                while ($spalte1 = mysql_fetch_array($sqlcount)) {
                    echo "<tr>";
                    echo "<td style='padding:15px'><a href='#' class='zoom'><img src='" . $spalte1['Bildurl'] . "' height='100px' width='100px'/><span><img src='" . $spalte1['Bildurl'] . "' height='auto' width='250px'/></span></td>";
                    echo "<td style='padding:15px'>"
                    . $spalte1['Name'] . "<br>" . $spalte1['Art'] .
                    "<br>" . $spalte1['grosse'] . "<br><b><s>" . $spalte1['Preis'] . " €</s></b></td>";
                    echo "<td><img src='images/off-icon-" . $count . ".png' /></td>";
                    echo "<td></td>";
                    echo "<td><h3 style='color:red;'>" . round($spalte1['Preis'] - ($spalte1['Preis'] * $Rabatt / 100), 2) . " €</h3></td>";
                    echo "</tr>";
                    $count++;
                    $Rabatt = $Rabatt - 12;
                }
                ?>
            </table>
        </div>
    </body>
</html>