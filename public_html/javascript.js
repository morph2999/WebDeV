function checkPw()
{
    Eingabepw01 = document.getElementById("pw1").value;
    Eingabepw02 = document.getElementById("pw2").value;

//Prüft, ob die zwei eingegebenen Passwörter übereinstimmen

    if (Eingabepw01 != Eingabepw02)
        alert("Passwörter stimmen nicht überein");
}
