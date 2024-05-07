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
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

    <?php
            get_Header();
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
        <a class="item" href="<?php the_permalink(); ?>">
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
            echo 'No hay cuadros disponibles.';
        }
        ?>
    </div>















    <?php /* 

<div class="grid-container">
    <?php
    // Obtener todos los cuadros de WordPress
    $args = array(
        'post_type'      => 'cuadros_post',
        'posts_per_page' => -1,
    );
    $query = new WP_Query($args);

    // Dividir los resultados en columnas
    $total_posts = $query->post_count;
    $posts_per_column = ceil($total_posts / 4);
    $remaining_posts = $total_posts % 4;
    $remaining_counter = 0;

    // Inicializar el contador
    $counter = 0;

    // Loop a través de los cuadros y generar las columnas
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();

            // Incrementar el contador
            $counter++;

            // Mostrar el cuadro en la columna correspondiente
            if ($counter % $posts_per_column === 1) {
                echo '<div class="columna">';
            }
            ?>
    <a class="item" href="">
        <div class="images-container">
            <?php
                    // Obtener la URL de la imagen destacada
                    $image_url = get_field('cuadro_imagen');
                    ?>
            <img class="images" src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
        </div>
        <div class="title-container">
            <div class="title"><?php the_field('cuadro_titulo'); ?></div>
        </div>
    </a>
    <?php
            // Cerrar la columna si se alcanza el límite o es el último cuadro
            if ($counter % $posts_per_column === 0 || $counter === $total_posts) {
                echo '</div>'; // Cerrar la columna
            }
        }
    }
    wp_reset_postdata(); // Restablecer datos de consulta
    ?>
    </div>
    */?>





    </section>
</body>

</html>