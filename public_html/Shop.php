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
            <div id="inhalt" align="center">    
                <img src="images/malefemale.jpg" align="center" usemap="#areale">
                <map name="areale">
                    <area shape="rect" coords="0,0,333,500" href="damenshop.php" alt="EckeLinks" title=Damen>
                    <area shape="rect" coords="333,0,666,500" href="herrenshop.php" alt="EckeRechts" title="Herren">                    
                </map>
            </div>
        </div>
    </body>
</html>