<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $vname = $_POST['vname'];
        $nname = $_POST['nname'];
        $pw1 = $_POST['pw1'];
        $email = $_POST['email'];
        $user = $_POST['user'];
        $geschl = $_POST['geschl'];
        
       
$connect = mysql_connect('localhost', 'root', '', 'parfum')
        or die('Fehler beim Aufbau der Verbindung');
    
    
    

    $conn = @mysql_connect($MYSQL_HOST, $MYSQL_USER, $MYSQL_PASS) 
            OR die("Error: ".mysql_error());
    $sql = mysql_select_db("parfum") 
        OR die("Error: ".mysql_error()); 

        
$sql = "INSERT INTO user (Name, Nachname, username, Passwort, Email, Geschlecht)".
                "VALUES('$vname', '$nname','$email','$user','$pw1','geschl')";


                         
                          
                 
                  
        ?>
    </body>
</html>
