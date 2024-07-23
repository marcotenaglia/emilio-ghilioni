<?php
function enqueue_styles() {
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/styles.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

/**
 * Setup para el desarrollo en bloques
 */
function emptytheme_support()  {
    add_theme_support( 'block-templates' );
    add_theme_support( 'block-template-parts' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'custom-spacing' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'html5', array('style','script') );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'editor-font-sizes', array() );    
    add_theme_support( 'custom-line-height' );    
    add_theme_support( 'editor-color-palette', array() );
    add_theme_support( 'editor-gradient-presets', array() );    
    add_theme_support( 'custom-units', array() );    

    add_editor_style( 'editor-style.css' );
}
add_action( 'after_setup_theme', 'emptytheme_support' );

// Remover patterns por defecto
function remove_default_patterns() {
    remove_theme_support( 'core-block-patterns' );
}
add_action( 'init', 'remove_default_patterns' );

// Lista de todos los patterns registrados
function get_block_pattern_names_list() {
    $get_patterns  = WP_Block_Patterns_Registry::get_instance()->get_all_registered();
    $pattern_names = array_map(
        function ( array $pattern ) {
            return $pattern['name'];
        },
        $get_patterns
    );
    return $pattern_names;
}

// Eliminar los patterns registrados
function remove_all_core_block_patterns() {
    // Eliminar core patterns
    $registered_patterns = get_block_pattern_names_list();
    foreach ( $registered_patterns as $pattern_name ) {
        // Si comienza con core lo elimina
        if ( substr( $pattern_name, 0, strlen( 'core' ) ) === 'core' ) {
            unregister_block_pattern( $pattern_name );
        }
    }
}
add_action( 'init', 'remove_all_core_block_patterns' );

function registrar_cuadros() {
    $args = array(
        'public' => true,
        'label'  => 'Cuadros',
        'supports' => array( 'title', 'thumbnail' ), // Habilita soporte para título y miniatura (imagen destacada)
    );
    register_post_type( 'cuadros_post', $args );
}
add_action( 'init', 'registrar_cuadros' );

function registrar_publicaciones() {
    $args = array(
        'public' => true,
        'label'  => 'Publicaciones',
        'supports' => array( 'title', 'thumbnail' ), // Soporte para título y miniatura (imagen destacada)
        'publicly_queryable' => false, // Evita que se creen páginas individuales
    );
    register_post_type( 'publicaciones', $args );
}
add_action( 'init', 'registrar_publicaciones' );

/*

function add_script() {
    wp_enqueue_script('scripts', get_template_directory_uri() . '/script-main.js', array(), '1.0', false);
}

add_action('wp_enqueue_scripts', 'add_script'); 
*/

function enqueue_swiper_assets() {
    // Encolar el CSS de Swiper
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css');

    // Encolar el JS de Swiper
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, false);

    // Encolar tu archivo JS principal
    wp_enqueue_script('scripts', get_template_directory_uri() . '/script-main.js', array(), '1.0', false);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');
