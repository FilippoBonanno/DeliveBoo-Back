let registerForm = document.getElementById('user_register_form');
let email = document.querySelector('[name=email]');
let password = document.querySelector('[name=password]');
let password_confirmation = document.querySelector('[name=password_confirmation]');
let errorClientMessage = document.querySelectorAll('.errorClientMessage');
//errors
let emailError = 'Email non valida esempio: esempio@esempio.com';
let passwordNotMatch = 'Le due password non sono uguali!';
let errore = false;

// Caratteri alfanumerici e numeri
let alfanumerici = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
let numbers = '1234567890'

registerForm.addEventListener('submit', function (event) {
    //reset
    errorClientMessage = document.querySelectorAll('.errorClientMessage');
    errorClientMessage.forEach((element) => {
        element.remove();
    })
    email.style.border = '';
    password.style.border = '';
    password_confirmation.style.border = '';
    errore = false;

    //validazione email
    if(!emailChecker(email.value)){
        email.style.border = 'red solid 1px'
        email.insertAdjacentHTML('afterend',`<div class="errorClientMessage text-danger" role="alert">
										${emailError}
							</div>`);
        email.value = '';
        errore = true;
    }

    //password 
    if(passwordMatcher(password.value,password_confirmation.value)){
        password.style.border = 'red solid 1px';
        password_confirmation.style.border = 'red solid 1px';
        password.insertAdjacentHTML('afterend',`<div class="errorClientMessage text-danger" role="alert">
										${passwordNotMatch}
							</div>`);
        password_confirmation.value = '';
        password.value = '';
        errore = true;
    }

    //Se ci sono errori allora non far inviare il form
    if(errore){
        event.preventDefault();
    }

})

function emailChecker(email) {

    // Controlla se contiene il . e la @
    if (!email.includes("@") || !email.includes(".")) {
        return false;
    }
    // Controlla che ci sia un solo "@" e che sia in una posizione valida
    const atIndex = email.indexOf('@');
    if(atIndex === -1 || atIndex !== email.lastIndexOf('@')){
        return false
    }
    // Controlla che ci sia un punto dopo "@" e che non sia l'ultimo carattere
    const dotIndex = email.indexOf(".", atIndex);
    if (dotIndex === -1 || dotIndex === email.length - 1) {
        return false;
    }
    // Controlla che il primo e l'ultimo carattere siano alfanumerici
    if(!alfanumerici.includes(email[0]) || !alfanumerici.includes(email[email.length-1])){
        return false
    }
    // Controlla che non ci siano spazi bianchi
    if(email.includes(' ')){
        return false
    }
    // Controlla che non ci siano ".." o ".@" o "@."
    if (email.includes("..") || email.includes(".@") || email.includes("@.")) {
        return false;
    }
    // Se tutti i controlli passano, l'email è valida
    return true
    
}

function passwordMatcher(password,check){
    return password === check;
}

function taxIdValidator(value){
    // Controlla che la stringa value sia lunga 11 caratteri
    if(value.length!=11){
        return false
    }
    // Cicla su tutti i caratteri di value
    for(let i = 0; i<11; i++){
        //Se il carattere in posizione i non è un numero allora ritorna falso
        if(!numbers.includes(value[i])){
            return false
        }
    }
    return true
}