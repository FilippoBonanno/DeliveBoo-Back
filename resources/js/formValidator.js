let registerForm = document.getElementById('user_register_form');
let email = document.querySelector('[name=email]');
let password = document.querySelector('[name=password]');
let password_confirmation = document.querySelector('[name=password_confirmation]');
let tax_id = document.querySelector('[name=restaurant_tax_id]');
let categories = document.querySelectorAll('[name="category_id[]"]');
let restaurantAddress = document.querySelector('[name=restaurant_address]');
let errorClientMessage = document.querySelectorAll('.errorClientMessage');

//errors
let emailError = 'Email non valida esempio: esempio@esempio.com';
let passwordError = 'Le due password non sono uguali o non hanno almeno 8 caratteri!';
let taxidError = 'La P.iva inserita non è valida!';
let restaurantAddressError = "L'indirizzo non è valido!";
let categoryError = 'Devi selezionare almeno una categoria!';
let errori = false;

// Caratteri alfanumerici e numeri
let alfanumerici = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
let numbers = '1234567890'

registerForm.addEventListener('submit', function (event) {
    //reset
    resetErrors();
    event.preventDefault();

    //validazione email
    if (!emailValidator(email.value)) {
        email.style.border = 'red solid 1px'
        email.insertAdjacentHTML('afterend', `<div class="errorClientMessage text-danger" role="alert">
										${emailError}
							</div>`);
        email.value = '';
        errori = true;
    }

    //password 
    if (!passwordValidator(password.value, password_confirmation.value)) {
        password.style.border = 'red solid 1px';
        password_confirmation.style.border = 'red solid 1px';
        password.insertAdjacentHTML('afterend', `<div class="errorClientMessage text-danger" role="alert">
										${passwordError}
							</div>`);
        password_confirmation.value = '';
        password.value = '';
        errori = true;
    }

    // Partita Iva
    if (!taxIdValidator(tax_id.value)) {
        tax_id.style.border = 'red solid 1px';
        tax_id.insertAdjacentHTML('afterend', `<div class="errorClientMessage text-danger" role="alert">
										${taxidError}
							</div>`);
        tax_id.value = '';
        errori = true;
    }

    // Indirizzo
    if (!addressValidator(restaurantAddress.value)) {
        restaurantAddress.style.border = 'red solid 1px';
        restaurantAddress.insertAdjacentHTML('afterend', `<div class="errorClientMessage text-danger" role="alert">
										${restaurantAddressError}
							</div>`);
        restaurantAddress.value = '';
        errori = true;
    }

    // Categorie
    if (!categoryValidator(categories)) {
        categories[categories.length - 1].insertAdjacentHTML('afterend', `<div class="errorClientMessage text-danger" role="alert">
										${categoryError}
							</div>`);
        errori = true;
    }

    //Se ci sono errori allora non far inviare il form
    return !errori;

})

function emailValidator(email) {

    // Controlla se contiene il . e la @
    if (!email.includes("@") || !email.includes(".")) {
        return false;
    }
    // Controlla che ci sia un solo "@" e che sia in una posizione valida
    const atIndex = email.indexOf('@');
    if (atIndex === -1 || atIndex !== email.lastIndexOf('@')) {
        return false
    }
    // Controlla che ci sia un punto dopo "@" e che non sia l'ultimo carattere
    const dotIndex = email.indexOf(".", atIndex);
    if (dotIndex === -1 || dotIndex === email.length - 1) {
        return false;
    }
    // Controlla che il primo e l'ultimo carattere siano alfanumerici
    if (!alfanumerici.includes(email[0]) || !alfanumerici.includes(email[email.length - 1])) {
        return false
    }
    // Controlla che non ci siano spazi bianchi
    if (email.includes(' ')) {
        return false
    }
    // Controlla che non ci siano ".." o ".@" o "@."
    if (email.includes("..") || email.includes(".@") || email.includes("@.")) {
        return false;
    }
    // Se tutti i controlli passano, l'email è valida
    return true

}

function passwordValidator(password, check) {
    if(password.length<8 || check.length<8){
        return false;
    }
    return password === check;
}

function taxIdValidator(value) {
    // Controlla che la stringa value sia lunga 11 caratteri
    if (value.length != 11) {
        return false
    }
    // Cicla su tutti i caratteri di value
    for (let i = 0; i < 11; i++) {
        //Se il carattere in posizione i non è un numero allora ritorna falso
        if (!numbers.includes(value[i])) {
            return false
        }
    }
    return true
}

function addressValidator(address) {

    address = address.trim();
    // Controlla se l'indirizzo è vuoto
    if (address.length === 0) {
        return false;
    }

    // Controlla la lunghezza minima dell'indirizzo
    if (address.length < 10) {
        return false;
    }

    // Controlla la presenza di numeri nell'indirizzo
    const hasNumber = /\d/.test(address);
    if (!hasNumber) {
        return false;
    }

    // Se tutte le validazioni passano
    return true;
}

function categoryValidator(categoryArray) {
    categoryArray.forEach((element) => {
        if (element.checked) {
            return true;
        }
    })
    return false;
}

function resetErrors() {
    errorClientMessage = document.querySelectorAll('.errorClientMessage');
    errorClientMessage.forEach((element) => {
        element.remove();
    })
    email.style.border = '';
    password.style.border = '';
    password_confirmation.style.border = '';
    tax_id.style.border = '';
    restaurantAddress.style.border = '';
    errori = false;
}