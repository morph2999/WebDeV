<?php

$verbindung = mysql_connect("localhost", "root", "")//Passwort von deiner Datenbank (Xampp)
        or die("keine Verbindung möglich.
        Benutzername oder Passwort sind falsch");

mysql_select_db("parfum")
        or die("Die Datenbank existiert nicht.");

$sql = mysql_query("SELECT * FROM produkthe");

while ($zeile = mysql_fetch_assoc($sql)) {
    echo "<tr>";
    echo "<td>" . $zeile['Bild'] . "</td>";
    echo "<td>" . $zeile['Name'] . "</td>";
    echo "<td>" . $zeile['Art'] . "</td>";
    echo "<td>" . $zeile['grosse'] . "</td>";
    echo "<td>" . $zeile['Preis'] . "</td>";
    echo "</tr>";
}
?>
