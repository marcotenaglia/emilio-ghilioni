<?php
/*
Template Name: Publicaciones
*/
?>

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
            get_header();
        ?>

<div class="publicaciones-grid">
    <?php
            // Crear una consulta personalizada para obtener las publicaciones
            $args = array(
                'post_type' => 'publicaciones',
                'posts_per_page' => -1
            );
            $query = new WP_Query($args);

            // Comprobar si hay publicaciones
            if ($query->have_posts()) {
                // Iterar sobre las publicaciones
                while ($query->have_posts()) {
                    $query->the_post();
                    $titulo = get_field('titulo_publicacion');
                    $imagen = get_field('imagen_publicacion');
                    $descripcion = get_field('descripcion_publicacion');
                    ?>
                <div class="publicacion">
                    <div class="publicacion-images-container">
                        <img class="publicacion-images" src="<?php echo esc_url($imagen); ?>"
                            alt="<?php echo esc_attr($titulo); ?>">
                    </div>
                    <div class="texto-publicacion">
                        <div class="titulo-publicacion-container">
                            <div class="titulo-publicacion"><?php echo esc_html($titulo); ?></div>
                        </div>
                        <div class="descripcion-publicacion-container">
                            <div class="descripcion-publicacion"><?php echo esc_html($descripcion); ?></div>
                        </div>
                    </div>
                </div>
    <?php
                }
                wp_reset_postdata(); // Restablecer datos de la consulta
            } else {
                echo 'No hay publicaciones disponibles.';
            }
            ?>
</div>