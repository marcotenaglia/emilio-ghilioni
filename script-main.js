document.addEventListener('DOMContentLoaded', function () {
    console.log("hola")

    let navToggle = document.getElementById('navToggle')
    let menuHambur = document.getElementById('hamburguerMenu')
    let menuHamburOpen = document.getElementById('menuHamburOpen')
    let menuHamburClose = document.getElementById('menuHamburClose')
    let navList = document.getElementById('nav-list')
    let lupa = document.getElementById('lupa')
    let lupaSvg = document.getElementById('lupaSvg')
    let xSvg = document.getElementById('xSvg')
    let filter = document.getElementById('filter')


    menuHambur.addEventListener('click', function () {
        menuHamburOpen.classList.toggle('open');
        menuHamburClose.classList.toggle('open');
        navList.classList.toggle('nav-list-open')
        lupa.classList.toggle("open")

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

    lupa.addEventListener("click", () => {
        navToggle.classList.toggle("menu-off")
        filter.classList.toggle("filter-section-on")
        lupaSvg.classList.toggle("open")
        xSvg.classList.toggle("x-open")
        menuHambur.classList.toggle("open")
    });


}
);


document.addEventListener('DOMContentLoaded', function () {
    const closeButton = document.getElementById('closeButton');
    if (closeButton) {

        closeButton.innerHTML = `
            <svg class="swiper-x-svg" version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100">
                <title>svg-x-svg</title>
                <defs>
                    <image  width="111" height="77" id="img1" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG8AAABNCAMAAACff8pvAAAAAXNSR0IB2cksfwAAAVZQTFRFAAAA////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////MhOoIAAAAHJ0Uk5TAEcAh/+GAhoBVwNWYBelBpK153MVprv7yU8KZgRwCHJxpwUJBw8uPg2Jok258K5OUeL+8iOMqTwxwfa/EeT5wF1BsshZEHnr+MdiGUW9wlIdZ+rKYUzgWiSh7Vxp08MqsFQcuGNkjhgnaw4wgDbMfsYtmt70pwAAA7xJREFUeJytmM9LVFEUx8+56vMqWTD+Qh0qRYlaBEWbImghQUREuKgWLVu064+Jgv6AWtmyWgS6aBEI4SJCECLR0lDHapDxNTPO9Oa9mfHNzH3vnnOud+dw5TPfO99z7v0eBACswjEsVaHsQoAuxJI7zkP0Sby+AOYO7EfEf0UKD04W3IGnsLZ2STwY/u0KPNW7N4i4RdgZ8HSm5AgMcACjuElwTE2f9t2ONMSNbZAMWuOByh44KAxxE4c/SJtDHmjwxAo56ho8kJsmxGXXqNsbPD3yR6Qwwm37NHUxfaoiUcg7zDhPVBZ1q1AKoYMnKAu2uhYeKD26wQFGv90vSps28kCP7zIURup+AkNdG49lGmYhGHkM0/CtYuKRTSOwipEHaiBDME2kbqfApBl4oCvaqlCqzsQjmEZmlSRe0EvTryduz7TxLArlh5nEAz2RTwQKCyGVl1IWTuoSeaC8MWNZSHomhQe6t2pQGKnbKQrVpfCMpnE8zFSeoZe6WcXG6zCNu7p0Hqiz1ZhpInVbhFAi5YEeyjcVuqqL/jGdFzONQ8+sLZ3dDPufhdc0TYQri60yE8S1Nd/Oq5tmJudolYFskH+/V+y8epgBeiQxrnM9gcCdPd/OCxROBi51K4TTmQBXOjxcJfAiq7gl4Cvor8D5Plwm8CKcE3B6CHEJBqfLOTsvqjvfKXJfX7nwCa4hfi5ZeVFX6fJdMv7UGfyagxv4sVq08RpdxXPI+Go2sOZIYJjFgq0ejnqmGu9hhZn4uoNLudtYfl+x1Xu8Z/LCTHzdQ9wdxoPF2us4ldfaM2UJODDnJfyms/tvwz/SeO3Xq2ww5M0hLszOV4s2XucFJBkMqcwtxMLBh/q1mcwzRRI19ZercPwm5oZeN2eViTzz9coeDPU//HIRtxab3zqJl3S9Mk2je+/jq0cvjz5I4CVHEuZg6Anm57tiv4mZl/ZWYSnUJwZz+/HHuJGX/s5MCzPty3u8sNby9jfxbC8xRll4oFqjhoFnjySqe0LaSzt5lEhiDjMiHu1ZK+2lHTxqJJEO2dt49Ee7cMjeyuNEEtpgKJXHiyRadfMVxnncSCIxTYzHjyScTtPBk+Q77XMVNnmybK4mmQobPGl65ZYFxnDZdUEAUt4ARyHGcJtlSeDS2W2GQmzixPmOVRYIUqscLU4vxeMY44SmmRt+TuIdxxgnCDMZuIrPCLypffchVW0w1H13+XLpBY0nH+M0l6o8xXer9n0I0/k+p4lffenMgzfrFB70FxwPsw4kzXz/A0as85FogFCcAAAAAElFTkSuQmCC"/>
                </defs>
                <style>
                </style>
                <use id="img1" href="#img1" x="13" y="13"/>
            </svg>`;

        closeButton.addEventListener('click', function () {
            const swiperContainer = document.getElementById('swiperContainer');
            if (swiperContainer) {
                swiperContainer.classList.remove('swiper-open');
            }
        });
    }

    const swiper = new Swiper('.swiper-container', {
        loop: true,
        slidesPerView: 1,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});