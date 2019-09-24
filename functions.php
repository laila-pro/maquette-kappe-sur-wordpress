<?php
// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_CSS() {
    wp_register_style('normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
    wp_enqueue_style('normalize-styles');

    wp_register_style('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");
    wp_enqueue_style('bootstrap');
      /*wp_enqueue_style('monstyle', get_template_directory_uri() . 'style.css');*/
    wp_register_style('style', get_template_directory_uri().'/style.css');
    wp_enqueue_style( 'style' );
  }
add_action('wp_enqueue_scripts', 'add_CSS');

//TODO changer l'ordre de chargement pour que masonry ne soit pas écrasé par bootstrap
function add_script(){
  wp_enqueue_script('masonry', "https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js", true);
  wp_enqueue_script( 'jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js");
  wp_enqueue_script('ajax', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js");
  wp_enqueue_script('bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js");
  wp_enqueue_script('fontawesome', "https://kit.fontawesome.com/6fee70888d.js");
  wp_enqueue_script('script', get_template_directory_uri().'/script.js');
}

add_action( 'wp_enqueue_scripts', 'add_script' );
/*script-------*/

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Featured Image dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)
 }
/*ajouter un menu*/
register_nav_menu('principal',__( 'Menu principal' ));




/*
* On utilise une fonction pour créer notre custom post type 'p'
*/

function wpm_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Projets', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Projet', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Projets'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Tous les projets'),
		'view_item'           => __( 'Voir les projets'),
		'add_new_item'        => __( 'Ajouter un nouveau projet'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer un projet '),
		'update_item'         => __( 'Modifier un projet '),
		'search_items'        => __( 'Rechercher un projet '),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);

	// On peut définir ici d'autres options pour notre custom post type

	$args = array(
		'label'               => __( 'projets'),
		'description'         => __( 'les articles developpeurs'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/*
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
    'menu_position'=>5,
		'rewrite'			  => array( 'slug' => 'projets'),

	);

	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'projets', $args );

}

add_action( 'init', 'wpm_add_taxonomies', 0 );

//On crée 3 taxonomies personnalisées: Année, Réalisateurs et Catégories de série.

function wpm_add_taxonomies() {
/*
	// Taxonomie Année

	// On déclare ici les différentes dénominations de notre taxonomie qui seront affichées et utilisées dans l'administration de WordPress
	$labels_annee = array(
		'name'              			=> _x( 'dates', 'taxonomy general name'),
		'singular_name'     			=> _x( 'date', 'taxonomy singular name'),
		'search_items'      			=> __( 'Chercher une date'),
		'all_items'        				=> __( 'Toutes les dates'),
		'edit_item'         			=> __( 'Editer la date'),
		'update_item'       			=> __( 'Mettre à jour la date'),
		'add_new_item'     				=> __( 'Ajouter une nouvelle date'),
		'new_item_name'     			=> __( 'Valeur de la nouvelle date'),
		'separate_items_with_commas'	=> __( 'Séparer les réalisateurs avec une virgule'),
		'menu_name'         => __( 'Date'),
	);

	$args_annee = array(
	// Si 'hierarchical' est défini à false, notre taxonomie se comportera comme une étiquette standard
		'hierarchical'      => true,
		'labels'            => $labels_annee,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'annees' ),
	);

	register_taxonomy( 'dates', 'projets', $args_annee );*/

	// Taxonomie Réalisateurs

	$labels_realisateurs = array(
		'name'                       => _x( 'Réalisateurs', 'taxonomy general name'),
		'singular_name'              => _x( 'Réalisateur', 'taxonomy singular name'),
		'search_items'               => __( 'Rechercher un réalisateur'),
		'popular_items'              => __( 'Réalisateurs populaires'),
		'all_items'                  => __( 'Tous les réalisateurs'),
		'edit_item'                  => __( 'Editer un réalisateur'),
		'update_item'                => __( 'Mettre à jour un réalisateur'),
		'add_new_item'               => __( 'Ajouter un nouveau réalisateur'),
		'new_item_name'              => __( 'Nom du nouveau réalisateur'),
		'separate_items_with_commas' => __( 'Séparer les réalisateurs avec une virgule'),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer un réalisateur'),
		'choose_from_most_used'      => __( 'Choisir parmi les plus utilisés'),
		'not_found'                  => __( 'Pas de réalisateurs trouvés'),
		'menu_name'                  => __( 'Réalisateurs'),
	);

	$args_realisateurs = array(
		'hierarchical'          => false,
		'labels'                => $labels_realisateurs,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'realisateurs' ),
	);

	register_taxonomy( 'realisateurs', 'projets', $args_realisateurs );

	// Catégorie de série

	$labels_cat_projet = array(
		'name'                       => _x( 'types de projet', 'taxonomy general name'),
		'singular_name'              => _x( 'type de projet', 'taxonomy singular name'),
		'search_items'               => __( 'Rechercher un type'),
		'popular_items'              => __( ''),
		'all_items'                  => __( 'Toutes les catégories'),
		'edit_item'                  => __( 'Editer une catégorie'),
		'update_item'                => __( 'Mettre à jour une catégorie'),
		'add_new_item'               => __( 'Ajouter une nouvelle catégorie'),
		'new_item_name'              => __( 'Nom de la nouvelle catégorie'),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer une catégorie'),
		'choose_from_most_used'      => __( 'Choisir parmi les catégories les plus utilisées'),
		'not_found'                  => __( 'Pas de catégories trouvées'),
		'menu_name'                  => __( 'Catégories de projet'),
	);

	$args_cat_projet = array(
	// Si 'hierarchical' est défini à true, notre taxonomie se comportera comme une catégorie standard
		'hierarchical'          => false,
		'labels'                => $labels_cat_projet,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'categories-projet' ),
	);

	register_taxonomy( 'categoriesprojet', 'projets', $args_cat_projet );
}

add_action( 'init', 'wpm_custom_post_type', 0 );
