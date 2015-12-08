function checkPw()
{
    Eingabepw01 = document.getElementById("pw1").value;
    Eingabepw02 = document.getElementById("pw2").value;

//Prüft, ob die zwei eingegebenen Passwörter übereinstimmen

    if (Eingabepw01 != Eingabepw02)
        alert("Passwörter stimmen nicht überein") 
        return false;
}

function checkEmail(email) {
  var rx = /^([^\s@,:"<>]+)@([^\s@,:"<>]+\.[^\s@,:"<>.\d]{2,}|(\d{1,3}\.){3}\d{1,3})$/;
  var part = email.value.match(rx);
  var info = 'E-Mail-Adresse ';
  if(part && part[2].indexOf('..')==-1) info += '<'+part[1]+'@'+part[2]+'> ist OK.';
  else { info += 'ist fehlerhaft!'; email.focus(); }
  document.getElementById('checkEmail').innerHTML = info;
}

var request = new XMLHttpRequest();

            function Registration() {
                request.open("POST", "Registrieren.html", true);
                request.onreadystatechange = myEventHandler;
                request.send(null);
            }

            function Profil() {
                request.open("POST", "MeinProfil.html", true);
                request.onreadystatechange = myEventHandler;
                request.send(null);
            }

            function Shop() {
                request.open("POST", "Shop.php", true);
                request.onreadystatechange = myEventHandler;
                request.send(null);
            }
            
            function Herren() {
                request.open("POST", "herrenshop.php", true);
                request.onreadystatechange = myEventHandler;
                request.send(null);
            }
            
            function Damen() {
                request.open("POST", "damenshop.php", true);
                request.onreadystatechange = myEventHandler;
                request.send(null);
            }
            
            function Angebot() {
                request.open("POST", "Angebot.php", true);
                request.onreadystatechange = myEventHandler;
                request.send(null);
            }
            
            function myEventHandler() {
                document.getElementById('ausgabe').innerHTML = request.responseText;
            }