<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
$connect = mysql_connect('localhost', 'root', '', 'parfum')
        or die('Fehler beim Aufbau der Verbindung');
    
    $nname = $_POST['nname'];

    $conn = @mysql_connect($MYSQL_HOST, $MYSQL_USER, $MYSQL_PASS) 
            OR die("Error: ".mysql_error());
    mysql_select_db($MYSQL_DATA) OR die("Error: ".mysql_error()); 

        
$sql = "INSERT INTO user (Name, Nachname, username, Passwort, Email, Geschlecht)".
                "VALUES('$vname', '$nname','$email','$user','$pw1',)";
                         
                          
                 
                  
        ?>
    </body>
</html>
