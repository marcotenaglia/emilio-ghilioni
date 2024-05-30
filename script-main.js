document.addEventListener('DOMContentLoaded', function () {
    console.log("hola")

    let menu = document.getElementById('hamburguerMenu')
    let menuOpen = document.getElementById('menu-open')
    let menuClose = document.getElementById('menu-close')
    let navList = document.getElementById('nav-list')
    let botonBusqueda = document.getElementById('botonBusqueda')


    menu.addEventListener('click', function () {
        menuOpen.classList.toggle('open');
        menuClose.classList.toggle('open');
        navList.classList.toggle('nav-list-open')
    });

    let imagenCompleta = document.getElementById("imagenCompleta");
    let imagenCompletaContainer = document.querySelector(".imagen-completa-container");
    let swiperImagen = document.getElementById("swiperImagen");

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
    let allImages = Array.from(images).map(image => image.src);
    
    const swiperContainer = document.getElementById('swiperContainer');
    let swiper;
    
    if (swiperContainer && images.length > 0) {
        swiper = new Swiper('.swiper-container', {
            loop: true,
            slidesPerView: 1,
            slidesPerGroup: 1,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            keyboard: {
                enabled: true,
                onlyInViewport: false,
            }
        });
    
        images.forEach(image => {
            image.addEventListener('click', function () {
                const index = allImages.indexOf(this.src);
                if (swiper) {
                    swiper.slideToLoop(index);
                }
                if (swiperContainer) {
                    swiperContainer.classList.add('swiper-open');
                }
                ajustarTamanio();
            });
        });
    
        const closeButton = document.getElementById('closeButton');
        if (closeButton) {
            closeButton.addEventListener('click', function () {
                if (swiperContainer) {
                    swiperContainer.classList.remove('swiper-open');
                }
            });
        }
    
        if (swiperContainer) {
            swiperContainer.addEventListener('click', function (event) {
                if (event.target === swiperContainer) {
                    swiperContainer.classList.remove('swiper-open');
                }
            });
        }
    }

    if (botonBusqueda) {

        botonBusqueda.addEventListener("click", function () {
            console.log("holaaaa");
            // Obtener el valor del año ingresado por el usuario
            const year = document.getElementById("year").value;
            
            // Obtener todos los cuadros
            const cuadros = document.querySelectorAll(".home-grid .item");

            // Mostrar u ocultar cuadros según el año seleccionado
            cuadros.forEach(cuadro => {
                const cuadroYear = cuadro.getAttribute("date");
                if (cuadroYear === year || year === '') {
                    cuadro.style.display = "flex";
                } else {
                    cuadro.style.display = "none";
                }
                
            });
            
        });
    }
    
    }
);
