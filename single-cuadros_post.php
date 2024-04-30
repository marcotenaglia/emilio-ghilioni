<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>emilio ghilioni</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<?php
get_header();

// Loop de la entrada individual
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>

<?php
            get_Header();
        ?>

<div class="detalles-cuadro" id="post-<?php the_ID(); ?>">


    <div class="detalles-titulo">
        <?php echo get_field('cuadro_titulo'); ?>
    </div>


    <div class="imagen-completa-container">
        <?php
                $imagen_completa = get_field('imagen_completa');
                if ($imagen_completa) {
                    echo '<img src="' . esc_url($imagen_completa) . '" alt="Imagen Completa">';
                }
                ?>
    </div>


    <div class="detalles-cuadro-recortes">
        <div>
            <?php
                $recorte_1 = get_field('recorte_1');
                if ($recorte_1) {
                    echo '<img src="' . esc_url($recorte_1) . '" alt="Recorte 1">';
                }
                ?>
        </div>
        <div>
            <?php
                $recorte_2 = get_field('recorte_2');
                if ($recorte_2) {
                    echo '<img src="' . esc_url($recorte_2) . '" alt="Recorte 2">';
                }
                ?>
        </div>
        <div>
            <?php
                $recorte_3 = get_field('recorte_3');
                if ($recorte_3) {
                    echo '<img src="' . esc_url($recorte_3) . '" alt="Recorte 3">';
                }
                ?>
        </div>

        
    </div>
    <div class="detalles-cuadro-descripcion">
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


<?php
    }
}

