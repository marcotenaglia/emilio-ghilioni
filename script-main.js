window.onload = function() {
    console.log("hola")

let menu = document.getElementById('hamburguerMenu')

menu.addEventListener('click', function() {
    menu.classList.add('menu-open')
});

    let imagenCompleta = document.getElementById("imagenCompleta");
    let imagenCompletaContainer = document.querySelector(".imagen-completa-container");


    function ajustarTamanio() {
        if (imagenCompleta.offsetWidth > 700) {
            console.log("El ancho de la imagen es mayor que 700px");
            imagenCompleta.style.maxWidth = "673px";
            imagenCompletaContainer.style.height = "auto";
        }
   
    }

    // Llama a la función de ajuste de tamaño cuando la ventana se redimensiona
    window.addEventListener('resize', ajustarTamanio);

    // Llama a la función de ajuste de tamaño cuando la página se carga inicialmente
    ajustarTamanio();
};
