let price = document.querySelector('[name=price]');

let description = document.querySelector('[name=description]');

let form = document.getElementById('storeDish');

let errorClientMessage = document.querySelectorAll('.errorClientMessage');

let errori = false;

let trimmedDescription = '';

console.log('ciao');

form.addEventListener('submit', function (event) {

    resetErrors();

    //prezzo
    if (!priceValidator(price.value)) {
        price.style.border = 'red solid 1px'
        price.insertAdjacentHTML('afterend', `<div class="errorClientMessage text-danger" role="alert">
										Il campo Prezzo deve avere 2 numeri decimali
							</div>`);
        price.value = '';
        errori = true;
    }

    //descrizione
    trimmedDescription = description.value.trim();
    if (trimmedDescription.length < 20) {
        description.style.border = 'red solid 1px'
        description.insertAdjacentHTML('afterend', `<div class="errorClientMessage text-danger" role="alert">
										Il campo Descrizione deve contenere almeno 20 caratteri
							</div>`);
        description.value = '';
        errori = true;
    }


    //Se ci sono errori allora non far inviare il form
    if (errori) {
        event.preventDefault();
    }
})
function priceValidator(price) {

    // Converti il prezzo in stringa, se non lo è già
    price = price.toString();

    // Controlla se il prezzo è un numero valido
    let numericPrice = parseFloat(price);

    // Controlla che il prezzo sia un numero compreso tra 0 e 999.99
    if (isNaN(numericPrice) || numericPrice < 0 || numericPrice > 999.99) {
        return false;
    }

    // Controlla che ci sia esattamente un punto decimale e che ci siano 2 cifre decimali
    let dotIndex = price.indexOf('.');
    if (dotIndex === -1 || price.length - dotIndex !== 3) {
        return false;
    }

    return true;
}

function resetErrors() {
    errorClientMessage = document.querySelectorAll('.errorClientMessage');
    errorClientMessage.forEach((element) => {
        element.remove();
    })
    price.style.border = '';
    description.style.border = '';
    trimmedDescription = '';
    errori = false;
}