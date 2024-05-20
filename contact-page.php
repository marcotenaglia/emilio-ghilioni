<?php
/*
Template Name: Contacto
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

<div class="contacto-container">
        <div class="contacto-imagen"><img src="<?php echo get_template_directory_uri(); ?>/images/imagen-contacto.png" alt="Logo"></div>
        <div class="contacto-texto">
            <div class="contacto-titulo">Emilio Ghilioni</div>
            <div class="contacto-mail">Para más información: ghilioni.obras@gmail.com</div>
            <div class="contacto-ciudad">Rosario, Argentina</div>
            <a class="contacto-instagram" src="www.instagram.com">Instagram</a>
        </div>
</div>