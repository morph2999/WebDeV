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

        <div id="kopf">  
            <div style="float:left">
                <!-- Menü Bar, wobei <li> die Elemente listet und <ul> für ungeordnete Liste steht -->
                <ul id="hauptmenue">
                    <li class="menu"><a class= "menu" href="index.html">Home</a></li>
                    <li class="menu"><a class= "menu" href="Shop.php">Shop</a>
                        <ul id="untermenue">
                            <li class="untermenu"><a class= "menu" href="dump.html">Herren</a></li>
                            <li class="untermenu"><a class= "menu" href="dump.html">Damen</a></li>
                        </ul>
                    </li>
                    <li class="menu"><a class= "menu" href="MeinProfil.html">Profil</a></li>
                </ul>
            </div>

            <div style="float:right; display:block; overflow:hidden">
                <form action="suche.php" method="post">
                    <table>
                        <tr>
                            <td><input size="100" name="vname" type="text" maxlength="255" placeholder="Nach Artikel suchen"/></td>
                        </tr>
                    </table>
                </form>
            </div>     
        </div>    

        <div id="mitte">
            <div id="links"></div>
            <div id="rechts">
                <div>
                    <!-- Login-Buttons -->

                    <form action="login.php" method = "POST" style="text-align: left">
                        <p><font color="#FFFFFF"> User: <input type="text" name="username" size="13">
                            PW: <input type="password" name="pw" size="13"></font></p>
                        <p><input type="submit" value="Submit"></p>
                        <a href="Registrieren.html">Registrieren</a>
                    </form>   
                </div>                
            </div>
            <div id="inhalt">    
                <table align="center" class="shop">
                    <?php
                    $verbindung = mysql_connect("localhost", "root", "")//Passwort von deiner Datenbank (Xampp)
                            or die("keine Verbindung möglich.
                    Benutzername oder Passwort sind falsch");

                    mysql_select_db("parfum")
                            or die("Die Datenbank existiert nicht.");

                    $sql = mysql_query("SELECT * FROM produkthe");

                    while ($zeile = mysql_fetch_assoc($sql)) {
                        echo "<tr>";
                        echo "<td class='shop'><img src='" . $zeile['Bildurl'] . "' height='100px' width='100px'/></td>";
                        echo "<td class='shop'>" . $zeile['Name'] . "</td>";
                        echo "<td class='shop'>" . $zeile['Art'] . "</td>";
                        echo "<td class='shop'>" . $zeile['grosse'] . "</td>";
                        echo "<td class='shop'>" . $zeile['Preis'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
</html>