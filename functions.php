<?php

// ajout de fonctions au thème
add_theme_support( 'post_title' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

//ajout du style et des scripts
function register_assets(){

wp_enqueue_script(
'wordpress',
'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js'
);

wp_enqueue_script(
'custom-scripts',
get_template_directory_uri().'/scripts/main.js',
array(),
'1.0'
);

wp_enqueue_style(
'wordpress-css',
'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css'
);

wp_enqueue_style(
'woo-commerce',
get_stylesheet_uri(),
array(),
'1.0'
);

/*style que je n'ai pas dans mon truc mais qui existe chez tiavina et son theme trafalgar
on peut faire pareil avec les scripts*/


wp_enqueue_style(
'orion-custom-css',
get_template_directory_uri().'/styles/main.css',
array(),
'1.0'
);


/*dans main.css on peut écrire :
body{
background-color : ###### !important;
}*/


if (is_front_page()) {
    wp_enqueue_style(
        'front',
        get_template_directory_uri(). '/assets/styles/main.css',
        array(),
        '1.0'
        );
}

}
add_action('wp_enqueue_scripts','register_assets');

// prise en charge du logo du site
function custom_logo() {
add_theme_support('custom-logo', array(
'flex-height' => true,
'flex-width' => true,
));
}
add_action('after_setup_theme','custom_logo');



/* ------------------BACKGROUND------------------- */
add_theme_support( 'custom-background' );
$args = array(
	'default-image' => '/assets/img/landing.svg',
);
add_theme_support( 'custom-background', $args );
/* ------------------------------------------------------- */




/*Navigation Menus*/
function register_my_menu() {
    register_nav_menu('primary',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );
  /*End*/


  function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );

  
/* ----------------------------------------CUSTOM-POST-TYPE-------------------------------------------------- */




function orion_register_post_types() {
	
        // CPT Portfolio
        $labels = array(
            'name' => 'headerlanding',
            'all_items' => 'Tous les CPT',  // affiché dans le sous menu
            'singular_name' => 'HeaderLanding cpt',
            'add_new_item' => 'Ajouter un cpt',
            'edit_item' => 'Modifier le cpt',
            'menu_name' => 'headerlanding'
        );

      $args = array(
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor','thumbnail' ),
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-admin-customizer',
      );

      register_post_type( 'HeaderLanding', $args );
      

/*       ----------------------------------------------------- */

          $labels = array(
            'name' => 'videolanding',
            'all_items' => 'Tous les CPT',  // affiché dans le sous menu
            'singular_name' => 'videolanding cpt',
            'add_new_item' => 'Ajouter un cpt',
            'edit_item' => 'Modifier le cpt',
            'menu_name' => 'videolanding'
          );

          $args = array(
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor','thumbnail' ),
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-admin-customizer',
          );

          register_post_type( 'videolanding', $args );


/*       ----------------------------------------------------- */

        $labels = array(
            'name' => 'middletext',
            'all_items' => 'Tous les CPT',  // affiché dans le sous menu
            'singular_name' => 'middletext cpt',
            'add_new_item' => 'Ajouter un cpt',
            'edit_item' => 'Modifier le cpt',
            'menu_name' => 'middletext'
        );

      $args = array(
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor','thumbnail' ),
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-admin-customizer',
      );

      register_post_type( 'middletext', $args );


/*       ------------------------------------------------------ */


        $labels = array(
            'name' => 'middlepicture',
            'all_items' => 'Tous les CPT',  // affiché dans le sous menu
            'singular_name' => 'middlepicture cpt',
            'add_new_item' => 'Ajouter un cpt',
            'edit_item' => 'Modifier le cpt',
            'menu_name' => 'middlepicture'
        );

      $args = array(
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor','thumbnail' ),
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-admin-customizer',
      );

      register_post_type( 'middlepicture', $args );

/* -------------------------------------------------------- */


        $labels = array(
            'name' => 'skillpictograms',
            'all_items' => 'Tous les CPT',  // affiché dans le sous menu
            'singular_name' => 'skillpictograms cpt',
            'add_new_item' => 'Ajouter un cpt',
            'edit_item' => 'Modifier le cpt',
            'menu_name' => 'skillpictograms'
        );

      $args = array(
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor','thumbnail' ),
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-admin-customizer',
      );

      register_post_type( 'skillpictograms', $args );

/* -------------------------------------------------------- */

      $labels = array(
        'name' => 'realisations',
        'all_items' => 'Tous les CPT',  // affiché dans le sous menu
        'singular_name' => 'realisations cpt',
        'add_new_item' => 'Ajouter un cpt',
        'edit_item' => 'Modifier le cpt',
        'menu_name' => 'realisations'
      );

      $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-admin-customizer',
      );

      register_post_type( 'realisations', $args );

/* -------------------------------------------------------- */

}


























add_action( 'init', 'orion_register_post_types' ); // Le hook init lance la fonction


/* --------------------------------FIN-CUSTOM-POST-TYPE------------------------------- */
/* ----------------------------------DEBUT SECTION BG---------------------------------------- */

add_action( 'customize_register' , 'my_theme_options' );
function my_theme_options( $wp_customize ) {
    $wp_customize->add_section('mytheme_section_bg_img', array(
            'title'       => __( 'Arrière plan par section', 'orion' ),
            'priority'    => 100,
            'capability'  => 'edit_theme_options',
            'description' => __('Select a background image', 'orion'), 
        ) 
    );

    $wp_customize->add_setting('section_bg_img');

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'section_bg_img', array(
            'label'    => __( 'Background image', 'orion' ), 
            'section'  => 'mytheme_section_bg_img',
            'settings' => 'section_bg_img',
            'priority' => 10,
        ) 
    ));
}

/* ----------------------------------FIN SECTION BG----------------------------------- */
/* ----------------------------------DEBUT NAV BOOTSTRAP----------------------------------- */

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/* ------------------------------------------------------------------------------------------- */

/*End*/

/* ------------------------------------------------------------------------------------------- */













/* ----------------------------------FIN MENU BOOTSTRAP----------------------------------- */





/* -----CUSTOM HEADER IMAGE-------- */
add_theme_support( 'custom-header' );
/* --------------------------------- */