function validate() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var span = document.getElementById("INVALIDATE");
    var el_down = document.getElementById("DOWN");
    if (username == "medecin" && password == "dr.zeghib") {
      loginMedecin.style.display = "none";
      ConnecterM.style.display = "flex";
      list.style.display = "flex";
      menuConnecter.style.display = "flex";
    } else { el_down.innerHTML = span.textContent; }
}

function conx() {
    var Identifiant = document.getElementById("Identifiant").value;
    var motdepasse = document.getElementById("motdepasse").value;
    var span = document.getElementById("invalide");
    var el_down = document.getElementById("down");
    if (Identifiant == "errazi" && motdepasse == "servicenap") {
      loginInfirmier.style.display = "none";
      form.style.display = "flex";
      ConnecterI.style.display = "flex";
      menuConnecter.style.display = "flex";    
    } else { el_down.innerHTML = span.textContent; }
}