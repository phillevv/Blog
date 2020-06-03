//Validering av Register Formuläret
//Om inte användarnamn lösenord eller lösenorden matchar varnar webbläsern om detta

function validateForm() {
  var u = document.forms["myForm"]["username"].value;
  var p1 = document.forms["myForm"]["password"].value;
 var p2 = document.forms["myForm"]["password2"].value;
  if (u == "") {
    alert("Fyll i ett användarnamn");
    return false;
  }
  if (p1 == "") {
    alert("Fyll i ett lösenord");
    return false;
  }
    
  if (p2 == "") {
    alert("Upprepa lösenord");
    return false;
  }
  if (p1 !== p2) {
    alert("Lösenorden matchar inte");
    return false;
  }
}
