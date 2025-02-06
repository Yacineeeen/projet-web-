function validernom() {
    var nomObjet = document.getElementById("nom_cause");
    var nomObjetError = document.getElementById("nom_cause_error");
    var regex = /^[a-zA-Z ]+$/;
    if (regex.test(nomObjet.value)|| nomObjet.value.length==0) {
        nomObjetError.innerHTML = ""; // Clear the error message
        nomObjet.style.border = "none"; // Remove the border from the error element
        nomObjet.style.borderColor = "green"; // Reset the border color of the input field
    } else {
        nomObjetError.innerHTML = "Nom de l'objet doit contenir des lettres alphabetiques et des espaces"; // Update the error message
        nomObjet.style.border = "1.5px solid red"; // Add a red border to the input field
        nomObjet.style.borderColor = "red"; // Set the border color of the input field to red
    }
}


function validateFirstName() {
    const firstName = document.querySelector('input[name="first_name"]').value;
    const firstNameError = document.getElementById('first_name_error');
    const namePattern = /^[A-Za-z]+$/;

    if (!namePattern.test(firstName)) {
        firstNameError.textContent = "Veuillez entrer un prénom valide (lettres uniquement)";
    } else {
        firstNameError.textContent = "";
    }
}

function validateLastName() {
    const lastName = document.querySelector('input[name="last_name"]').value;
    const lastNameError = document.getElementById('last_name_error');
    const namePattern = /^[A-Za-z]+$/;

    if (!namePattern.test(lastName)) {
        lastNameError.textContent = "Veuillez entrer un nom valide (lettres uniquement)";
    } else {
        lastNameError.textContent = "";
    }
}

function validateEmail() {
    const email = document.querySelector('input[name="email"]').value;
    const emailError = document.getElementById('email_error');
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailPattern.test(email)) {
        emailError.textContent = "Veuillez entrer une adresse email valide";
    } else {
        emailError.textContent = "";
    }
}

function validatePhone() {
    const phone = document.querySelector('input[name="phone"]').value;
    const phoneError = document.getElementById('phone_error');
    const phonePattern = /^\d{8}$/;

    if (!phonePattern.test(phone)) {
        phoneError.textContent = "Veuillez entrer un numéro de téléphone valide (8 chiffres)";
    } else {
        phoneError.textContent = "";
    }
}

function validatePlace() {
    const place = document.querySelector('input[name="place"]').value;
    const placeError = document.getElementById('place_error');

    if (place === '') {
        placeError.textContent = "Veuillez spécifier le lieu";
    } else {
        placeError.textContent = "";
    }
}

function validateDate() {
    const date = document.querySelector('input[name="date_d"]').value;
    const dateError = document.getElementById('date_error');

}

function validateCause() {
    const cause = document.querySelector('select[name="cause"]').value;
    const causeError = document.getElementById('cause_error');
    const validCauses = ["eau", "nourriture", "vetements"];

    if (!validCauses.includes(cause.toLowerCase())) {
        causeError.textContent = "Veuillez sélectionner une cause de donation valide";
    } else {
        causeError.textContent = "";
    }
}


function validateAmount() {
    const amount = document.querySelector('input[name="amount"]').value;
    const amountError = document.getElementById('amount_error');

    if (isNaN(amount) || amount <= 0) {
        amountError.textContent = "Veuillez saisir un montant de donation valide";
    } else {
        amountError.textContent = "";
    }
}


document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector('#donation_form');

    form.addEventListener("input", function (e) {
        e.preventDefault();
        validateFirstName();
        validateLastName();
        validateEmail();
        validatePhone();
        validatePlace();
        validateDate();
        validateCause();
        validateAmount();
    });


});
