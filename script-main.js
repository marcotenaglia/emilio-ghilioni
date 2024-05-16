window.onload = function() {
    console.log("hola")

let menu = document.getElementById('hamburguerMenu')

menu.addEventListener('click', function() {
    menu.classList.add('menu-open')
});
};

