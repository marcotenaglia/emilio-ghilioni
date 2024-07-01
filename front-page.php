<!DOCTYPE html>
<html lang="en">

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

<body>

    <?php
            get_header();
        ?>
  
    <div class="home-grid">

        <?php
        // Obtener todos los cuadros de WordPress
        $args = array(
            'post_type'      => 'cuadros_post',
            'posts_per_page' => -1,
        );
        $query = new WP_Query($args);
    
        // Loop a través de los cuadros y mostrar la imagen y el título
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
    
                // Obtener el título del cuadro y la URL de la imagen
                $cuadro_titulo = get_field('cuadro_titulo');
                $imagen_home = get_field('imagen_home');
        ?>
        <a date="<?php echo get_field('fecha'); ?>" class="item" href="<?php the_permalink(); ?>">
            <div class="title-container">
                <div class="title"><?php echo esc_html($cuadro_titulo); ?></div>
            </div>
            <div class="images-container">
                <img class="images" src="<?php echo esc_url($imagen_home); ?>"
                    alt="<?php echo esc_attr($cuadro_titulo); ?>">
            </div>
        </a>
        <?php
            }
            wp_reset_postdata(); // Restablecer datos de consulta
        } else {
            // Si no hay cuadros, aquí puedes mostrar un mensaje o realizar alguna acción
            echo 'No hay obras disponibles.';
        }
        ?>
    </div>


    </section>
</body>

</html>