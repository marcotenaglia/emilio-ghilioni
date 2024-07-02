<header class="header">

    <div class="invisible"></div>

    <a href="<?php echo esc_url(home_url('/')); ?>">
        <!-- Enlace al inicio -->
        <img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/images/logo1.png" alt="Logo">
    </a>
    <div id="menu" class="menu">

        <nav class="nav">
            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Home' ) ) ); ?>">inicio</a>
            <a class="nav-anchortag"
                href="<?php echo esc_url( get_permalink( get_page_by_title( 'Trayectoria' ) ) ); ?>">trayectoria</a>
            <a class="nav-anchortag"
                href="<?php echo esc_url( get_permalink( get_page_by_title( 'Publicaciones' ) ) ); ?>">publicaciones</a>
            <a class="nav-anchortag"
                href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contacto' ) ) ); ?>">contacto</a>
            <svg class="lupa" id="lupa" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                viewBox="0 0 50 50">
                <path
                    d="M 21 3 C 11.6 3 4 10.6 4 20 C 4 29.4 11.6 37 21 37 C 24.354553 37 27.47104 36.01984 30.103516 34.347656 L 42.378906 46.621094 L 46.621094 42.378906 L 34.523438 30.279297 C 36.695733 27.423994 38 23.870646 38 20 C 38 10.6 30.4 3 21 3 z M 21 7 C 28.2 7 34 12.8 34 20 C 34 27.2 28.2 33 21 33 C 13.8 33 8 27.2 8 20 C 8 12.8 13.8 7 21 7 z">
                </path>
            </svg>
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
            <svg class="open" id="menuHamburOpen" xmlns="http://www.w3.org/2000/svg" id="Calque_1" data-name="Calque 1"
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
            <svg class="close" id="menuHamburClose" xmlns="http://www.w3.org/2000/svg" id="Calque_1" data-name="Calque 1"
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

    <div id="filter" class="filter-section">
        <?php get_template_part('template-filter'); ?>
    </div>




</header>