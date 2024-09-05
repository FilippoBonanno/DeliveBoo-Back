let price = document.querySelector('[name=price]');

let description = document.querySelector('[name=description]');

let form = document.getElementById('storeDish');

let errori = false;

let trimmedDescription = '';

console.log('ciao');

form.addEventListener('submit', function(event){
    //prezzo
    if (!price.value.includes(',') ) {
        price.style.border = 'red solid 1px'
        price.insertAdjacentHTML('afterend', `<div class="errorClientMessage text-danger" role="alert">
										Il campo Prezzo deve avere 2 numeri decimali
							</div>`);
        price.value = '';
        errori = true;
    }

    trimmedDescription = description.value.trim();
    //descrizione
    if (trimmedDescription.length < 20) {
        description.style.border = 'red solid 1px'
        description.insertAdjacentHTML('afterend', `<div class="errorClientMessage text-danger" role="alert">
										Il campo Prezzo deve contenere almeno 20 caratteri
							</div>`);
        description.value = '';
        errori = true;
    }


    //Se ci sono errori allora non far inviare il form
    if(errori){
        event.preventDefault();
    }
})

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