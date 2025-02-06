function validerEtSoumettre(event) {
    event.preventDefault(); 
    var nom = document.getElementById("nomp").value;
    var prenom = document.getElementById("prep").value;
    var email = document.getElementById("emailp").value;
    var area = document.getElementById("area").value;
    var tel = document.getElementById("telp").value;
    var cin = document.getElementById("cin").value;
    var span1 = document.getElementById("s1");
    var span2 = document.getElementById("s2");
    var span3 = document.getElementById("s3");
    var span4 = document.getElementById("s4");
    var span5 = document.getElementById("s5");
    var span6 = document.getElementById("s6");
    var k = 0;

    // Validation du nom
if (nom.length === 0 || !/^[A-Za-z]+$/.test(nom)) {
    span1.innerHTML = "incorrect";
    span1.style.color = "red";
    event.preventDefault(); 
} else {
    span1.innerHTML = "correct";
    span1.style.color = "green";
    k++;
    // Empêche la soumission automatique
}

// Validation du prénom
if (prenom.length === 0 || !/^[A-Za-z]+$/.test(prenom)) {
    span2.innerHTML = "incorrect";
    span2.style.color = "red";
    event.preventDefault();
} else {
    span2.innerHTML = "correct";
    span2.style.color = "green";
    k++;
    // Empêche la soumission automatique
}

// Validation de l'e-mail
if (!/^\S+@\S+\.\S+$/.test(email)) {
    span3.innerHTML = "incorrect";
    span3.style.color = "red";
    event.preventDefault();
} else {
    span3.innerHTML = "correct";
    span3.style.color = "green";
    k++;
}

// Validation de l'area
if (area.startsWith("+") && area.length === 4 && /^\d+$/.test(area.substring(1))) {
    span4.innerHTML = "correct";
    span4.style.color = "green";
    k++;
} else {
    span4.innerHTML = "incorrect";
    span4.style.color = "red";
    event.preventDefault(); // Empêche la soumission automatique
}

// Validation du téléphone
if (/^\d{8}$/.test(tel)) {
    span5.innerHTML = "correct";
    span5.style.color = "green";
    k++;
} else {
    span5.innerHTML = "incorrect";
    span5.style.color = "red";
    event.preventDefault(); // Empêche la soumission automatique
}

// Validation du CIN
if (/^\d{14}$/.test(cin)) {
    span6.innerHTML = "correct";
    span6.style.color = "green";
    k++;
} else {
    span6.innerHTML = "incorrect";
    span6.style.color = "red";
    event.preventDefault(); // Empêche la soumission automatique
}


    if (k === 6) {
        // Soumettre le formulaire
        document.getElementById("form").submit();

        // Rediriger l'utilisateur vers la page initiale
        window.location.href = "eventa.html";
    }
  
}
