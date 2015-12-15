<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "Bitte erst <a href=\"indexlog.php\">einloggen</a>";
    exit;
}
?>
<html>

    <head>
        <title>WebShop</title>

        <!-- Link zur css-Datei -->
        <link href="newcss.css" type="text/css" rel="stylesheet">

        <!-- link zur Javaskript-Datei -->
        <script language="javascript" type="text/javascript" src="javascript.js"></script>
        <meta charset="UTF-8">
    </head>

    <body onload="Angebot()">
        <div id="kopf">  
            <div>
                <div style="float:left">
                    <!-- Menü Bar, wobei <li> die Elemente listet und <ul> für ungeordnete Liste steht -->
                    <ul id="hauptmenue">
                        <li class="menu"><a class= "menu" href="index.php">Home</a></li>
                        <li class="menu"><a class= "menu" href='#' onclick="Shop()">Shop</a>

                        </li>
                        <li class="menu"><a class= "menu" href='#' onclick="Profil()">Profil</a></li>
                    </ul>
                </div>

                <div style="float:right">
                    <form action="" method="POST" onsubmit="Suche()">
                        <input size="100" name="Name" type="search"  onkeyup="searchFor(this.value);" placeholder="Nach Artikel suchen"  />
                        <input type="submit" value="Suchen"/>
                        <div id="ergebnis"></div>
                    </form>
                </div>                
            </div>
        </div>

        <div id="mitte">
            <div id="links"></div>
            <div id="rechts">
                <div>
                    <!-- Login-Buttons -->

                    <?php
                    echo "Sie sind eingeloggt als:  " . $_SESSION["username"];
                    echo "<br><a href='logout.php'>Ausloggen</a></br>"
                    ?>

                </div>                
            </div>
            <div id="ausgabe">
            </div>
        </div>
    </body>
</html>
