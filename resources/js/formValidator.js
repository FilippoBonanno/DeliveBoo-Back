
let registrati_cta = document.getElementById('registrati_cta');

registrati_cta.addEventListener('click', function(){
    let email = document.getElementById('email');
    let password = document.getElementById('password');
    let password_confirm = document.getElementById('password_confirm');
    let form = document.getElementById('user_register_form');

    form.addEventListener('submit',function(event){
        event.preventDefault();
        let isValid = false;
        if(containsSpecificCharacters(email.value,'@')){
            if(containsSpecificCharacters(email.value,'.')){
                isValid = true;
            }
        }
    })

})

function containsSpecificCharacters(str, characters) {
    for (let i = 0; i < characters.length; i++) {
        if (str.includes(characters[i])) {
            return true; // Restituisce true se uno dei caratteri è trovato
        }
    }
    return false; // Restituisce false se nessuno dei caratteri è trovato
}

function hasMultipleSpaces(str) {
    return /\s{2,}/.test(str);
}