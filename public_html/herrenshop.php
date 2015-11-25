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
                            <li class="untermenu"><a class= "menu" href="herrenshop.php">Herren</a></li>
                            <li class="untermenu"><a class= "menu" href="damenshop.php">Damen</a></li>
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
        </div>
    </body>
</html>