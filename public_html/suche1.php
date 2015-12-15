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

            $Name = $_POST["Name"];

            echo "<b>Du hast nach \"<u>$Name</u>\" gesucht. Dadurch wurden folgende Einträge gefunden:</b><br /><br />";

            $abfrage = "SELECT * FROM produkte WHERE Name LIKE '%$Name%'";
            $ergebnis = mysql_query($abfrage) or die(mysql_error());

            echo "<table>";

            while ($row = mysql_fetch_array($ergebnis)) {
                echo "<tr colspan= 2>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Preis']."</td>";
                echo "<td>".$row['Beschreibung']."</td>";
                echo "</tr>";
                echo "<td style='padding:15px'><a href='#' class='zoom'><img src='" . $row['Bildurl'] . "' height='100px' width='100px'/><span><img src='" . $row['Bildurl'] . "' height='auto' width='250px'/></span></td>";
                echo "<td style='padding:15px'>";
                echo "</tr>";
                
            }
            echo "</table>";
           echo "<a href='index.php'>weiter auf index</a>"
            
            ?>  
        </div>
        
        
    </body>
    
</html>