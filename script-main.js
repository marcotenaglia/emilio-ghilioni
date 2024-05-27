document.addEventListener('DOMContentLoaded', function () {
    console.log("hola")

    let menu = document.getElementById('hamburguerMenu')
    let menuOpen = document.getElementById('menu-open')
    let menuClose = document.getElementById('menu-close')
    let navList = document.getElementById('nav-list')

    menu.addEventListener('click', function () {
        menuOpen.classList.toggle('open');
        menuClose.classList.toggle('open');
        navList.classList.toggle('nav-list-open')
    });

    let imagenCompleta = document.getElementById("imagenCompleta");
    let imagenCompletaContainer = document.querySelector(".imagen-completa-container");

    function ajustarTamanio() {
        if (imagenCompleta) {
            if (imagenCompleta.offsetWidth > 673) {
                console.log("El ancho de la imagen es mayor que 673px");
                imagenCompleta.style.maxWidth = "673px";
                imagenCompletaContainer.style.height = "auto";
            }
        }

    }


    // Llama a la función de ajuste de tamaño cuando la ventana se redimensiona
    window.addEventListener('resize', ajustarTamanio);

    // Llama a la función de ajuste de tamaño cuando la página se carga inicialmente
    ajustarTamanio();

    //swiper

    const images = document.querySelectorAll('.imagen-completa, .recorte-img');
    const allImages = Array.from(images).map(image => image.src);

    images.forEach(image => {
        image.addEventListener('click', function () {
            const index = allImages.indexOf(this.src);
            const swiper = new Swiper('.swiper-container', {
                initialSlide: index,
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
            const swiperContainer = document.getElementById('swiperContainer');
            swiperContainer.classList.add('swiper-open');
        });

        const closeButton = document.getElementById('closeButton');

        // Agrega un evento de clic al botón de cierre
        closeButton.addEventListener('click', function () {
            // Busca el contenedor del Swiper
            const swiperContainer = document.getElementById('swiperContainer');

            // Remueve la clase que muestra el Swiper
            swiperContainer.classList.remove('swiper-open');
        });

    });

});

