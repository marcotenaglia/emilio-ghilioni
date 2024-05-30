<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>emilio ghilioni</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <?php wp_head(); ?>
</head>

<?php


// Loop de la entrada individual
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>

<?php
            get_Header();
        ?>

<div class="detalles-container" id="post-<?php the_ID(); ?>">

    <div class="detalles-grid">

        <div class="detalles-title">
            <?php echo get_field('cuadro_titulo'); ?>

        </div>

        <div class="imagen-descripcion">
            <div class="imagen-completa-container">
                <?php
                    $imagen_completa = get_field('imagen_completa');
                    if ($imagen_completa) {
                        echo '<img id="imagenCompleta" class="imagen-completa" src="' . esc_url($imagen_completa) . '" alt="Imagen Completa">';
                    }
                    ?>
            </div>
            <div class="descripcion">
                <div class="fecha">
                    <?php echo get_field('fecha'); ?>
                </div>

                <div class="medidas">
                    <?php echo get_field('medidas'); ?>
                </div>

                <div class="tecnica">
                    <?php echo get_field('tecnica'); ?>
                </div>
            </div>
        </div>


        <div class="recortes-grid">
            <div class="recortes-container">
                <?php
                $recorte_1 = get_field('recorte_1');
                if ($recorte_1) {
                    echo '<img class="recorte-img" src="' . esc_url($recorte_1) . '" alt="Recorte 1">';
                }
                ?>
            </div>
            <div class="recortes-container">
                <?php
                $recorte_2 = get_field('recorte_2');
                if ($recorte_2) {
                    echo '<img class="recorte-img" src="' . esc_url($recorte_2) . '" alt="Recorte 2">';
                }
                ?>
            </div>
            <div class="recortes-container">
                <?php
                $recorte_3 = get_field('recorte_3');
                if ($recorte_3) {
                    echo '<img class="recorte-img" src="' . esc_url($recorte_3) . '" alt="Recorte 3">';
                }
                ?>
            </div>

            <div class="descripcion-chica">
                <div class="fecha">
                    <?php echo get_field('fecha'); ?>
                </div>

                <div class="medidas">
                    <?php echo get_field('medidas'); ?>
                </div>

                <div class="tecnica">
                    <?php echo get_field('tecnica'); ?>
                </div>
            </div>



</div>
</div>


            <!-- Swiper HTML Structure -->
            <div id="swiperContainer" class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img id="swiperImagen" class="swiper-img" src="<?php echo esc_url($imagen_completa); ?>" alt="Imagen Completa">
                    </div>
                    <div class="swiper-slide"><img id="swiperImagen" class="swiper-img" src="<?php echo esc_url($recorte_1); ?>" alt="Recorte 1"></div>
                    <div class="swiper-slide"><img id="swiperImagen" class="swiper-img" src="<?php echo esc_url($recorte_2); ?>" alt="Recorte 2"></div>
                    <div class="swiper-slide"><img id="swiperImagen" class="swiper-img" src="<?php echo esc_url($recorte_3); ?>" alt="Recorte 3"></div>
                </div>
                <button id="closeButton" class="swiper-x">X</button>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>


            
        </div>
    </div>

<?php
    }
}