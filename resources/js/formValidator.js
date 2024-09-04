let registerForm = document.getElementById('user_register_form');
let email = document.querySelector('[name=email]');
let password = document.querySelector('[name=password]');
let password_confirmation = document.querySelector('[name=password_confirmation]');
let errorClientMessage = document.querySelectorAll('.errorClientMessage');
//errors
let emailError = 'Email non valida esempio: example@example.com';
let passwordNotMatch = 'Le due password non sono uguali!';
let errore = false;

// Caratteri alfanumerici
let alfanumerici = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

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
        email.insertAdjacentHTML('afterend',`<span class="errorClientMessage">
										<strong>&#x2022 ${emailError}</strong>
							</span>`);
        email.value = '';
        errore = true;
    }

    //password 
    if(password.value !== password_confirmation.value){
        password.style.border = 'red solid 1px';
        password_confirmation.style.border = 'red solid 1px';
        password.insertAdjacentHTML('afterend',`<span class="errorClientMessage">
										<strong>&#x2022 ${passwordNotMatch}</strong>
							</span>`);
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