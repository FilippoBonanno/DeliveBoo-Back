let registerForm = document.getElementById('user_register_form');
let email = document.getElementById('email');
let password = document.getElementById('password');
let password_confirmation = document.getElementById('password_confirmation');

// Caratteri alfanumerici
let alfanumerici = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

registerForm.addEventListener('submit', function (event) {
    event.preventDefault();

    //validazione email
    if(!emailChecker(email.value)){
        return false;
    }

    //password 
    if(password.value !== password_confirmation.value){
        alert('Le due password non combaciano!');
        return false
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