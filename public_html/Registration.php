<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $verbindung = mysql_connect("localhost", "root", "")//Passwort von deiner Datenbank (Xampp)
                or die("keine Verbindung möglich.
        Benutzername oder Passwort sind falsch");

        mysql_select_db("parfum")
                or die("Die Datenbank existiert nicht.");

        $Name = $_POST['vname'];
        $Nachname = $_POST['nname'];
        $Email = $_POST['email'];
        $username = $_POST['user'];
        $Passwort = $_POST['pw1'];
        $Geschlecht = $_POST['gesch'];
        $Passwort1 = md5($Passwort);

        $sql = "INSERT INTO user (ID, Name, Nachname, username, Passwort, Email, Geschlecht)
 		 VALUES  ('','$Name', '$Nachname','$username','$Passwort1','$Email','$Geschlecht')";

        $ergebnis = mysql_query($sql); //or die(mysql_error()); 
        ?>
    </body>
</html>
