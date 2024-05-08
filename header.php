<header class="header">

    <a href="<?php echo esc_url(home_url('/')); ?>">
        <!-- Enlace al inicio -->
        <img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
    </a>
    </div>

    <nav class="nav">
        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Home' ) ) ); ?>">Inicio</a>
        <a class="nav-anchortag" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Info' ) ) ); ?>">Información</a> 
        <a class="nav-anchortag" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contacto' ) ) ); ?>">Contacto</a> 
    </nav>

</header>