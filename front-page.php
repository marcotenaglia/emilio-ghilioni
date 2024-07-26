<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
     
        $titulo = isset($_GET['titulo']) ? sanitize_text_field($_GET['titulo']) : '';
        $tecnica = isset($_GET['tecnica']) && $_GET['tecnica'] ? sanitize_text_field($_GET['tecnica']) : '';
        $fecha = isset($_GET['fecha']) && $_GET['fecha'] ? sanitize_text_field($_GET['fecha']) : '';
        $medidas = isset($_GET['medidas']) && $_GET['medidas'] ? sanitize_text_field($_GET['medidas']) : '';
        
        $apply_filters = !empty($titulo) || !empty($tecnica) || !empty($fecha);
        
        $args = array(
            'post_type'      => 'cuadros_post',
            'posts_per_page' => -1,
        );

        $meta_query = array('relation' => 'AND');

        if (!empty($tecnica  && $tecnica !== '-')) {
            $meta_query[] = array(
                'key'     => 'tecnica',
                'value'   => $tecnica,
                'compare' => '=',
            );
        }
        
        if (!empty($fecha)  && $fecha !== '-') {
            $meta_query[] = array(
                'key'     => 'fecha',
                'value'   => $fecha,
                'compare' => '=',
                'type'    => 'NUMERIC',
            );
        }

        if (!empty($titulo)) {
            $args['s'] = $titulo; // Utiliza el parámetro 's' para buscar en el título y contenido
        }

        
        if (!empty($medidas) && $medidas !== '-') {
            $meta_query[] = array(
                'key'     => 'medidas',
                'value'   => $medidas,
                'compare' => '=',
            );
        }
        
        if (!empty($meta_query)) {
            $args['meta_query'] = $meta_query;
        }

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
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
            wp_reset_postdata();
        } else {
            echo 'No hay obras disponibles.';
            } 
        
/*





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




       */ ?>
    </div>


    </section>
</body>

</html>