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