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

<div class="publicaciones-container">
<?php
        // Comprobar si hay contenido en la página
        if (have_posts()) {
            // Iterar sobre el contenido de la página
            while (have_posts()) {
                the_post();
                ?>
                <h1><?php echo esc_html(get_field('titulo_publicaciones')); ?></h1>
                <img src="<?php echo esc_url(get_field('imagen_publicaciones')['url']); ?>" alt="<?php echo esc_attr(get_field('titulo_publicaciones')); ?>">
                <?php
                // Renderizar el contenido de la publicación
                the_content();
            }
        }
        ?>
</div>