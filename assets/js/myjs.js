function btnPlus(button, idProduct) {
    let parentElement = button.closest('.input-group');
    let max = Number(parentElement.querySelector("input[name='quantity']").getAttribute('max'));
    let min = Number(parentElement.querySelector("input[name='quantity']").getAttribute('min'));
    let numberE = parentElement.querySelector("input[name='quantity']");
    if(Number(numberE.value) + 1 >= max) {
        numberE.value = max - 1;
    }
    if(Number(numberE.value) + 1 < min) {
        numberE.value = min - 1;
    }
    
    updateQuantity(idProduct, Number(numberE.value) + 1);
}


function btnMinus(button, idProduct, key) {
    let parentElement = button.closest('.input-group');
    let max = Number(parentElement.querySelector("input[name='quantity']").getAttribute('max'));
    let min = Number(parentElement.querySelector("input[name='quantity']").getAttribute('min'));
    let numberE = parentElement.querySelector("input[name='quantity']");
    
    if (Number(numberE.value) - 1 >= max) {
        numberE.value = max + 1;
    }
    if (Number(numberE.value) - 1 < min) {
        numberE.value = min + 1;
    }
    
    updateQuantity(idProduct, Number(numberE.value) - 1);
}
