<?php
/*
Template Name: Info
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

<div class="info-container">
    <div class="info">
        <?php
    // The WordPress Loop
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            the_content(); // Mostrar el contenido de la página
        endwhile;
    endif;
    ?>
    </div>
</div>