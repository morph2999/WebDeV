<!DOCTYPE html>

<!--    Benutzen von GitHub:

    1. Beim starten von Netbeans "Pullen"
    1.1. Wenn eine Meldung kommt, wo ihr "Review" oder "Revert" drücken müsst -> Revert
    (d.h. ihr habt ohne zu pullen etwas an eurem Code geändert und müsst dies zurücksetzen
    VORSICHT: alle eure Änderungen gehen dabei verloren)
    2. Dann Bearbeiten
    3. Komplettes Projekt "Committen"
    4. Projekt "Pushen"
-->

<html>

    <head>
        <script>
        </script>

        <title>WebShop</title>

        <!-- Link zur css-Datei -->
        <script language="javascript" type="text/javascript" src="javascript.js"></script>

        <!-- link zur Javaskript-Datei -->

        <link href="newcss.css" type="text/css" rel="stylesheet">
        <meta charset="UTF-8">
    </head>

    <body>

        <a> anmelden bitte </a>
        <form action="login.php" method = "POST" style="text-align: "center">

              <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username"</td>
                </tr>
                <tr>
                    <td>Passwort:</td>
                    <td><input type="password" name="pw" size="13"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit">  </td>

                </tr>
            </table>

        </form>   

        <div id="ausgabe">
            <input type="button" onclick="Registrieren();" value ="registrieren">
        </div>

</html>
