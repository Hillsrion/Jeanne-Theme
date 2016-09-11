<?php
add_action( 'after_setup_theme', 'generic_setup' );
function generic_setup()
{
load_theme_textdomain( 'generic', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'generic' ) )
);
}
add_action( 'wp_enqueue_scripts', 'generic_load_scripts' );
function generic_load_scripts()
{
//wp_enqueue_style( 'generic-style', get_stylesheet_uri() );
wp_enqueue_script( 'jquery' );
wp_register_script( 'generic-videos', get_template_directory_uri() . '/js/videos.js' );
wp_enqueue_script( 'generic-videos' );
}
add_action( 'wp_head', 'generic_print_custom_scripts', 99 );
function generic_print_custom_scripts()
{
if ( !is_admin() ) {
?>
<script type="text/javascript">
jQuery(document).ready(function($){
$("#wrapper").vids();
});
</script>
<?php
}
}
add_filter( 'document_title_separator', 'generic_document_title_separator' );
function generic_document_title_separator( $sep ) {
$sep = "|";
return $sep;
}
add_filter( 'the_title', 'generic_title' );
function generic_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_action( 'widgets_init', 'generic_widgets_init' );
function generic_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'generic' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
add_action( 'comment_form_before', 'generic_enqueue_comment_reply_script' );
function generic_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
function generic_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter( 'get_comments_number', 'generic_comment_count', 0 );
function generic_comment_count( $count ) {
if ( ! is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}

// Register Custom Post Type
function custom_post_type() {

    $labels = array(
        'name'                  => _x( 'Dessins', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'drawing', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Dessins', 'text_domain' ),
        'name_admin_bar'        => __( 'Dessins', 'text_domain' ),
        'archives'              => __( 'drawings', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'Tous les dessins', 'text_domain' ),
        'add_new_item'          => __( 'Ajouter un dessin', 'text_domain' ),
        'add_new'               => __( 'Ajouter', 'text_domain' ),
        'new_item'              => __( 'Ajouter un dessin', 'text_domain' ),
        'edit_item'             => __( 'Éditer le dessin', 'text_domain' ),
        'update_item'           => __( 'Mettre à jour le dessin', 'text_domain' ),
        'view_item'             => __( 'Voir le dessin', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Non trouvé', 'text_domain' ),
        'not_found_in_trash'    => __( 'Non trouvé dans la corbeille', 'text_domain' ),
        'featured_image'        => __( 'Couverture', 'text_domain' ),
        'set_featured_image'    => __( "Mettre à jour l'image de couverture", 'text_domain' ),
        'remove_featured_image' => __( 'Supprimer l\'image de couverture', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'drawing', 'text_domain' ),
        'description'           => __( 'To store drawings', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( ),
        'taxonomies'            => array( 'category', 'post_tag', ' post_video', ' post_thumb' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'supports' => array('title', 'editor','thumbnail', 'excerpt', 'comments' )
    );
    register_post_type( 'dessins', $args );
    global $wp_rewrite;
    $wp_rewrite->flush_rules();
}
add_action( 'init', 'custom_post_type', 0 );
