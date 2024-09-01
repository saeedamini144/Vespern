<?php
function theme_support_vesperr()
{
    add_theme_support('title-tag'); //dynamic site title
    add_theme_support('custom-logo'); //custom-logo
    add_theme_support('post-thumbnails'); //show the post images
}
add_action("after_setup_theme", "theme_support_vesperr");

// unyson framwork
if (! defined('FW')) {
    require_once get_template_directory() . '/inc/unyson/framework/bootstrap.php';
}
// unyson framwork

// function vesperr_nav_menu()
// {
//     $vesperr_menu = array(
//         'primary' => 'main mmenu',
//         'Mobile' => 'Mobile menu'
//     );
//     register_nav_menus($vesperr_menu);
// }
// add_action('init', 'vesperr_nav_menu');

function register_my_menu()
{
    register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'register_my_menu');


function vesper_style_register()
{
    $version = wp_get_theme()->get('version');
    wp_enqueue_style('vesper_style', get_template_directory_uri() . '/style.css',  array("vesper_bootstrap_style"), $version, "all");
    wp_enqueue_style('vesper_bootstrap_style', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), "5.3.2", "all");
    wp_enqueue_style('vesper_style_bootstrapicon', get_template_directory_uri() . '/assets/css/bootstrap-icons.css', array(), "1.11.1", "all");
    wp_enqueue_style('vesper_style_boxicons', get_template_directory_uri() . '/assets/css/boxicons.min.css', array(), "1.0", "all");
    wp_enqueue_style('vesper_style_glightbox', get_template_directory_uri() . '/assets/css/glightbox.min.css', array(), "1.0", "all");
    wp_enqueue_style('vesper_style_remixicon', get_template_directory_uri() . '/assets/css/remixicon.css', array(), "1.0", "all");
    wp_enqueue_style('vesper_style_swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), "8.4.7", "all");
    wp_enqueue_style('vesper_aos_style', get_template_directory_uri() . '/assets/css/aos.css', array(), "3.0", "all");
}
add_action("wp_enqueue_scripts", "vesper_style_register");


function vesper_javascript_register()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script("vesper_js_puercoubter", get_template_directory_uri() . "/assets/js/purecounter_vanilla.js", array("jquery"), "1.5.0", true);
    wp_enqueue_script("vesper_js_aos", get_template_directory_uri() . "/assets/js/aos.js", array("jquery"), "3.0", true);
    wp_enqueue_script("vesper_js_bootstrap", get_template_directory_uri() . "/assets/js/bootstrap.bundle.min.js", array("jquery"), "5.3.2", true);
    wp_enqueue_script("vesper_js_glightbox", get_template_directory_uri() . "/assets/js/glightbox.min.js", array("jquery"), "1.0", true);
    wp_enqueue_script("vesper_js_isotope", get_template_directory_uri() . "/assets/js/isotope.pkgd.min.js", array("jquery"), "3.0.6", true);
    wp_enqueue_script("vesper_js_swiper", get_template_directory_uri() . "/assets/js/swiper-bundle.min.js", array("jquery"), "8.4.7", true);
    wp_enqueue_script("vesper_js_validate", get_template_directory_uri() . "/assets/js/validate.js", array("jquery"), "3.6", true);
    wp_enqueue_script("vesper_js_mainjs", get_template_directory_uri() . "/assets/js/main.js", array("jquery"), "1.0", true);
}
add_action("wp_enqueue_scripts", "vesper_javascript_register");

/////////////comments/////////////

function wp_learn_list_comments($comment, $args, $depth)
{
?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
        <div class="comment-<?php comment_ID() ?>">
            <div class="head-comment">
                <div class="comment_author">
                    <?php echo get_avatar($comment->comment_author_email); ?>
                    <cite class="fn"><?php echo get_comment_author_link(); ?></cite>
                </div>
                <?php if ($comment->comment_approved == 0) {
                    echo '<em>Your comment has not yet been approved by an administrator !</em>';
                }
                ?>
                <div class="comment-meta">
                    <ins class="comment-date"><?php echo get_comment_date() . ' ' . get_comment_time(); ?></ins>
                    <?php edit_comment_link('Edit comments'); ?>
                </div>
            </div>
            <div class="comment-text">
                <?php comment_text(); ?>
            </div>
            <div class="reply">
                <?php
                comment_reply_link(
                    array(
                        'depth' => $depth,
                        'max_depth' => $args['max_depth']
                    )
                );
                ?>
            </div>
        </div>
    </li>
<?php
}

/////////////Portfolio Post Type/////////////

function custom_post_type()
{
    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => 'portfolio',
        'singular_name'       => 'portfolio',
        'menu_name'           => 'porftolio',
        'parent_item_colon'   => '',
        'all_items'           => 'All Portfolio',
        'view_item'           => 'view portfolio',
        'add_new_item'        => 'Add new portfolio',
        'add_new'             => 'Add new',
        'edit_item'           => 'Edite Portfolio',
        'update_item'         => 'Update portfolio',
        'search_items'        => 'Search portfolio',
        'not_found'           => 'Not found',
        'not_found_in_trash'  => 'Not found in trash',
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => 'Portfolio',
        'description'         => 'The Portfolio of the site',
        'labels'              => $labels,
        // 'rewrite' => array('slug' => 'Portfolio-category'),
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        // 'taxonomies'          => array('Portfolio-category', 'post_tag'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'rewrite'            => array('slug' => 'portfolio'),
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type('portfolio', $args);
}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action('init', 'custom_post_type', 0);

// function creat_custom_taxonomies()
// {
//     register_taxonomy(
//         'Portfolio-category', //taxonomies name
//         'Portfolio', //the post type that register the taxonomies
//         array(
//             'labels' => array(
//                 'name' => __('Portfolio-category'),
//                 'singular_name' => __('Portfolio-category'),
//             ),
//             'rewrite' => array('slug' => 'Portfolio-category'),
//             'hierarchical' => true,  // اگر می‌خواهید دسته‌بندی سلسله مراتبی باشد (مثل دسته‌بندی‌ها)
//             'show_ui' => true,
//             'show_in_rest' => true,  // نمایش در ویرایشگر بلوکی
//             'show_admin_column' => true,
//         )

//     );
// }
// add_action('init', 'creat_custom_taxonomies');


// function create_Portfolio_taxonomy()
// {
//     $labels = array(
//         'name'              => _x('portfolio category', 'post type general name'),
//         'singular_name'     => _x('portfolio category', 'post type singular name'),
//         'search_items'      => __('Search Portfolio category'),
//         'all_items'         => __('All Portfolio category'),
//         'parent_item'       => __('Parent Portfolio category'),
//         'parent_item_colon' => __('Parent Portfolio category:'),
//         'edit_item'         => __('Edit Portfolio category'),
//         'update_item'       => __('Update Portfolio category'),
//         'add_new_item'      => __('Add New Portfolio category'),
//         'new_item_name'     => __('New Portfolio category'),
//         'menu_name'         => __('Portfolio category'),
//     );

//     $args = array(
//         'hierarchical'      => true, // مانند دسته‌بندی‌های وردپرس، اگر false باشد مانند برچسب‌ها عمل می‌کند
//         'labels'            => $labels,
//         'show_ui'           => true,
//         'show_admin_column' => true,
//         'query_var'         => true,
//         'rewrite'           => array('slug' => 'Portfolio_category'),
//         'show_in_rest'      => true // نمایش در ویرایشگر بلوکی
//     );

//     register_taxonomy('Portfolio_category', array('Portfolio'), $args);
// }
// add_action('init', 'create_Portfolio_taxonomy');

function create_portfolio_taxonomy()
{
    $labels = array(
        'name'              => _x('Portfolio Categories', 'taxonomy general name'),
        'singular_name'     => _x('Portfolio Category', 'taxonomy singular name'),
        'search_items'      => __('Search Portfolio Categories'),
        'all_items'         => __('All Portfolio Categories'),
        'parent_item'       => __('Parent Portfolio Category'),
        'parent_item_colon' => __('Parent Portfolio Category:'),
        'edit_item'         => __('Edit Portfolio Category'),
        'update_item'       => __('Update Portfolio Category'),
        'add_new_item'      => __('Add New Portfolio Category'),
        'new_item_name'     => __('New Portfolio Category'),
        'menu_name'         => __('Portfolio Categories'),
    );

    $args = array(
        'hierarchical'      => true, // مانند دسته‌بندی‌های وردپرس، اگر false باشد مانند برچسب‌ها عمل می‌کند
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'portfolio-category'),
        'show_in_rest'      => true // نمایش در ویرایشگر بلوکی
    );

    register_taxonomy('portfolio_category', array('portfolio'), $args);
}
add_action('init', 'create_portfolio_taxonomy');

//all the register name should use the small character and use _ instead of use -





// function create_books_post_type()
// {
//     $labels = array(
//         'name'               => _x('Books', 'post type general name'),
//         'singular_name'      => _x('Book', 'post type singular name'),
//         'menu_name'          => _x('Books', 'admin menu'),
//         'name_admin_bar'     => _x('Book', 'add new on admin bar'),
//         'add_new'            => _x('Add New', 'book'),
//         'add_new_item'       => __('Add New Book'),
//         'new_item'           => __('New Book'),
//         'edit_item'          => __('Edit Book'),
//         'view_item'          => __('View Book'),
//         'all_items'          => __('All Books'),
//         'search_items'       => __('Search Books'),
//         'parent_item_colon'  => __('Parent Books:'),
//         'not_found'          => __('No books found.'),
//         'not_found_in_trash' => __('No books found in Trash.')
//     );

//     $args = array(
//         'labels'             => $labels,
//         'public'             => true,
//         'publicly_queryable' => true,
//         'show_ui'            => true,
//         'show_in_menu'       => true,
//         'query_var'          => true,
//         'rewrite'            => array('slug' => 'book'),
//         'capability_type'    => 'post',
//         'has_archive'        => true,
//         'hierarchical'       => false,
//         'menu_position'      => null,
//         'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
//         'show_in_rest'       => true // نمایش در ویرایشگر بلوکی
//     );

//     register_post_type('book', $args);
// }
// add_action('init', 'create_books_post_type');


// function create_genre_taxonomy()
// {
//     $labels = array(
//         'name'              => _x('Genres', 'taxonomy general name'),
//         'singular_name'     => _x('Genre', 'taxonomy singular name'),
//         'search_items'      => __('Search Genres'),
//         'all_items'         => __('All Genres'),
//         'parent_item'       => __('Parent Genre'),
//         'parent_item_colon' => __('Parent Genre:'),
//         'edit_item'         => __('Edit Genre'),
//         'update_item'       => __('Update Genre'),
//         'add_new_item'      => __('Add New Genre'),
//         'new_item_name'     => __('New Genre Name'),
//         'menu_name'         => __('Genres'),
//     );

//     $args = array(
//         'hierarchical'      => true, // مانند دسته‌بندی‌های وردپرس، اگر false باشد مانند برچسب‌ها عمل می‌کند
//         'labels'            => $labels,
//         'show_ui'           => true,
//         'show_admin_column' => true,
//         'query_var'         => true,
//         'rewrite'           => array('slug' => 'genre'),
//         'show_in_rest'      => true // نمایش در ویرایشگر بلوکی
//     );

//     register_taxonomy('genre', array('book'), $args);
// }
// add_action('init', 'create_genre_taxonomy');
