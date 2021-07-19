const lembrar   = document.querySelector('#lembrar')
const circulo   = document.querySelector('.circulo')
const checkbox  = document.getElementsByClassName('checkbox')

lembrar.addEventListener('click', () => {
    checkbox[0].checked = true

    circulo.classList.toggle('desloca')
    

})

