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

            <?php
            $verbindung = mysql_connect("localhost", "root", "")
                    or die("keine Verbindung möglich. Benutzername oder Passwort sind falsch");

            mysql_select_db("parfum") or die("Die Datenbank existiert nicht.");

            $Name = $_GET["Name"];

            echo "<b>Du hast nach \"<u>$Name</u>\" gesucht. Dadurch wurden folgende Einträge gefunden:</b><br /><br />";

            $abfrage = "SELECT * FROM produktda WHERE Name LIKE '%$Name%' UNION ALL SELECT * FROM produkthe WHERE Name LIKE '%$Name%'";
            $ergebnis = mysql_query($abfrage) or die(mysql_error());

            echo "<table>";

            while ($row = mysql_fetch_assoc($ergebnis)) {
                echo "<tr>";
                echo "<td>" . $row['Name'] . "</td><td>" . $row['Preis'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            ?>  
        </div>
    </body>