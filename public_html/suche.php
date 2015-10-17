<!DOCTYPE html> 
<html> 

<head> 
<title>Suchleiste</title> 
</head> 

<body> 

<?php 
//* Datenbankverbindung aufbauen (START) 

$verbindung = mysql_connect ("localhost", "root", "") 
or die ("keine Verbindung möglich. Benutzername oder Passwort sind falsch"); 

mysql_select_db("parfum") or die ("Die Datenbank existiert nicht."); 

//* Datenbankverbindung aufbauen (ENDE) 

    $Name = $_POST['vname']; 
     
    echo "<b>Du hast nach dem Namen: \"<u>$Name</u>\" gesucht. Dadurch wurden folgende Einträge gefunden:</b><br /><br />"; 

//* Überprüfung der Eingabe     
    $abfrage = "SELECT * FROM user WHERE Name LIKE '%$Name%'"; 
    $ergebnis = mysql_query($abfrage) or die(mysql_error()); 
    if($ausgabe = mysql_fetch_assoc($ergebnis)) 
        { echo "".$ausgabe['Name'].""; } //* Wenn was gefunden wurde, wird es hier ausgegeben. 
    else 
        { echo "Es wurde kein Name unter den Namen \"<u>$Name</u>\" gefunden.<br /> 
        Bitte versuche es mit einem anderen namen.<br /> 
        <a href='test.html'>Zur&uuml;ck!</a>"; 
    }    // * Wenn nichts gefunden wurde, dann kommt diese Fehlermeldung. 
             
?>  

</body>