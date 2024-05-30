<header class="header">

    <a href="<?php echo esc_url(home_url('/')); ?>">
        <!-- Enlace al inicio -->
        <img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/images/logo1.png" alt="Logo">
    </a>
    </div>
    <div>

        <nav class="nav">
            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Home' ) ) ); ?>">inicio</a>
            <a class="nav-anchortag"
                href="<?php echo esc_url( get_permalink( get_page_by_title( 'Trayectoria' ) ) ); ?>">trayectoria</a>
            <a class="nav-anchortag"
                href="<?php echo esc_url( get_permalink( get_page_by_title( 'Publicaciones' ) ) ); ?>">publicaciones</a>
            <a class="nav-anchortag"
                href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contacto' ) ) ); ?>">contacto</a>
        </nav>
        <div class="nav-list-close" id="nav-list">
            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Home' ) ) ); ?>">inicio</a>
            <a class="nav-anchortag"
                href="<?php echo esc_url( get_permalink( get_page_by_title( 'Trayectoria' ) ) ); ?>">trayectoria</a>
            <a class="nav-anchortag"
                href="<?php echo esc_url( get_permalink( get_page_by_title( 'Publicaciones' ) ) ); ?>">publicaciones</a>
            <a class="nav-anchortag"
                href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contacto' ) ) ); ?>">contacto</a>
        </div>
        <button class="hamburguer-menu" id="hamburguerMenu">
            <svg class="open" id="menu-open" xmlns="http://www.w3.org/2000/svg" id="Calque_1" data-name="Calque 1"
                viewBox="0 0 20 20">
                <defs>
                    <style>
                    .cls-1 {
                        fill: none;
                        stroke: #000;
                        stroke-miterlimit: 10;
                        stroke-width: 0.75px;
                    }
                    </style>
                </defs>
                <title>Plan de travail 1</title>
                <line class="cls-1" x1="0.5" y1="1.5" x2="19.5" y2="18.5" />
                <line class="cls-1" x1="0.5" y1="18.5" x2="19.5" y2="1.5" />
            </svg>
            <svg class="close" id="menu-close" xmlns="http://www.w3.org/2000/svg" id="Calque_1" data-name="Calque 1"
                viewBox="0 0 20 20">
                <defs>
                    <style>
                    .cls-1 {
                        fill: none;
                        stroke: #000;
                        stroke-miterlimit: 10;
                        stroke-width: 0.75px;
                    }
                    </style>
                </defs>
                <title>Plan de travail 1</title>
                <line class="cls-1" y1="1" x2="19.97" y2="1" />
                <line class="cls-1" y1="19" x2="19.97" y2="19" />
                <line class="cls-1" x1="0.03" y1="9.9" x2="20" y2="9.9" />
            </svg>
        </button>
    </div>


</header>