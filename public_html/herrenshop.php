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

                $sqlcount = mysql_query("SELECT * FROM produkthe");
                $anzahl = mysql_num_rows($sqlcount) / 2;

                $sql1 = mysql_query("SELECT * FROM produkthe LIMIT $anzahl");
                $sql2 = mysql_query("SELECT * FROM produkthe LIMIT $anzahl OFFSET $anzahl");

                while ($spalte1 = mysql_fetch_array($sqlcount) + $spalte2 = mysql_fetch_array($sqlcount)) {
                    echo "<tr>";

                    echo "<td style='padding:15px'><a href='#' class='zoom'><img src='" . $spalte1['Bildurl'] . "' height='100px' width='100px'/><span><img src='" . $spalte1['Bildurl'] . "' height='auto' width='250px'/></span></td>";
                    echo "<td style='padding:15px'>"
                    . $spalte1['Name'] . "<br>" . $spalte1['Art'] .
                    "<br>" . $spalte1['grosse'] . "<br><b>" . $spalte1['Preis'] . " €</b></td>";

                    echo "<td style='padding:15px'><a href='#' class='zoom'><img src='" . $spalte2['Bildurl'] . "' height='100px' width='100px'/><span><img src='" . $spalte2['Bildurl'] . "' height='auto' width='250px'/></span></td>";
                    echo "<td style='padding:15px'>"
                    . $spalte2['Name'] . "<br>" . $spalte2['Art'] .
                    "<br>" . $spalte2['grosse'] . "<br><b>" . $spalte2['Preis'] . " €</b></td>";

                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </body>
</html>