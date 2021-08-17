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

/* wp_enqueue_style(
'wordpress-css',
'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css'
); */

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



  function capitaine_register_post_types() {
	
    // CPT Portfolio
    $labels = array(
        'name' => 'pROJETS',
        'all_items' => 'Tous les projets',  // affiché dans le sous menu
        'singular_name' => 'Projet',
        'add_new_item' => 'Ajouter un projet',
        'edit_item' => 'Modifier le projet',
        'menu_name' => 'CustomPostTypeTEST'
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

	register_post_type( 'portfolio', $args );
}
add_action( 'init', 'capitaine_register_post_types' ); // Le hook init lance la fonction


/* --------------------------------FIN-CUSTOM-POST-TYPE------------------------------- */
/* ----------------------------------DEBUT SECTION BG---------------------------------------- */


/* ----------------------------------FIN SECTION BG----------------------------------- */
/* ----------------------------------DEBUT BLOCK SPLITTER----------------------------------- */












/* ----------------------------------FIN BLOCK SPLITTER----------------------------------- */

