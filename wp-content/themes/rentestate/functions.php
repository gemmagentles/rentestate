<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

/* Overall Site Options */

if ( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
    acf_set_options_page_menu('Rent Estate Options');
    acf_add_options_sub_page('Global Site Options');
    acf_add_options_sub_page('Listings CTA');
}

// Blocks

add_action('acf/init', 'hero');
function hero() {

    // check function exists.
    if( function_exists('acf_register_block') ) {

        // register a Hero block.
        acf_register_block(array(
            'name'              => 'hero',
            'title'             => __("Hero"),
            'description'       => __("The block for the hero component, to hold a large image with text and a full width background color."),
            'render_template'   => 'template-parts/blocks/hero.php',
            'enqueue_style'     => get_template_directory_uri() . '/style.css',
            'category'          => 'layout',
            'icon'              => 'format-image',
            'mode'              => 'edit',
            'keywords'          => array('hero', 'image'),
        ));
    }
}

add_action('acf/init', 'halfandhalflist');
function halfandhalflist() {

    // check function exists.
    if( function_exists('acf_register_block') ) {

        // register a Half and Half List block.
        acf_register_block(array(
            'name'              => 'halfandhalflist',
            'title'             => __("Half and Half List"),
            'description'       => __("The block for the half and half list component, to be split 50 50 one side text, another side a list."),
            'render_template'   => 'template-parts/blocks/half-and-half-list.php',
            'enqueue_style'     => get_template_directory_uri() . '/style.css',
            'category'          => 'layout',
            'icon'              => 'format-aside',
            'mode'              => 'edit',
            'keywords'          => array('list', 'half'),
        ));
    }
}

add_action('acf/init', 'ctabanner');
function ctabanner() {

    // check function exists.
    if( function_exists('acf_register_block') ) {

        // register a CTA Banner block.
        acf_register_block(array(
            'name'              => 'ctabanner',
            'title'             => __("CTA Banner"),
            'description'       => __("The block for the CTA Banner component, to be a background image with a white box overlay that holds text and a link."),
            'render_template'   => 'template-parts/blocks/cta-banner.php',
            'enqueue_style'     => get_template_directory_uri() . '/style.css',
            'category'          => 'layout',
            'icon'              => 'align-center',
            'mode'              => 'edit',
            'keywords'          => array('cta', 'banner', 'image'),
        ));
    }
}

add_action('acf/init', 'articlecards');
function articlecards() {

    // check function exists.
    if( function_exists('acf_register_block') ) {

        // register an Article Cards block.
        acf_register_block(array(
            'name'              => 'articlecards',
            'title'             => __("Article Cards"),
            'description'       => __("The block for the Article Cards component, 3 columns in each row that shows the thumbnail information of each listing."),
            'render_template'   => 'template-parts/blocks/article-cards.php',
            'enqueue_style'     => get_template_directory_uri() . '/style.css',
            'category'          => 'layout',
            'icon'              => 'building',
            'mode'              => 'edit',
            'keywords'          => array('cards', 'images', 'listings', 'columns', 'rows'),
        ));
    }
}

add_action('acf/init', 'horizontalslider');
function horizontalslider() {

    // check function exists.
    if( function_exists('acf_register_block') ) {

        // register an Horizontal Slider block.
        acf_register_block(array(
            'name'              => 'horizontalslider',
            'title'             => __("Horizontal Slider"),
            'description'       => __("The block for the Horizontal Slider component, a slider that should pull in the first 5 listing posts."),
            'render_template'   => 'template-parts/blocks/horizontal-slider.php',
            'enqueue_style'     => get_template_directory_uri() . '/style.css',
            'category'          => 'layout',
            'icon'              => 'slides',
            'mode'              => 'edit',
            'keywords'          => array('slider', 'images', 'listings'),
        ));
    }
}

add_action('acf/init', 'split_text');
function split_text() {

    // check function exists.
    if( function_exists('acf_register_block') ) {

        // register an Split Text block.
        acf_register_block(array(
            'name'              => 'split_text',
            'title'             => __("Split Text"),
            'description'       => __("The block for the Split Text component, 1 row with 2 columns. One side a heading, the other a paragraph."),
            'render_template'   => 'template-parts/blocks/split-text.php',
            'enqueue_style'     => get_template_directory_uri() . '/style.css',
            'category'          => 'layout',
            'icon'              => 'editor-table',
            'mode'              => 'edit',
            'keywords'          => array('text', 'half'),
        ));
    }
}


/*Register WordPress Gutenberg CPT */
function listing_post_type() {

    register_post_type( 'listing',
        // WordPress CPT Options Start
        array(
            'labels' => array(
                'name' => __( 'Listings' ),
                'singular_name' => __( 'Listing' )
            ),
            'has_archive' => true,
            'public' => true,
            'rewrite' => array('slug' => 'listings', 'index'),
        )
    );
}
 
add_action( 'init', 'listing_post_type' );

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width)) {
    $content_width = 900;
}

if (function_exists('add_theme_support')) {
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
//    add_theme_support('post-thumbnails');
//    add_image_size('large', 700, '', true); // Large Thumbnail
//    add_image_size('medium', 250, '', true); // Medium Thumbnail
//    add_image_size('small', 120, '', true); // Small Thumbnail
//    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// Load more button for functions
function rentestate_loadmore_scripts() {
 
	global $wp_query; 
 
	// In most cases it is already included on the page and this line can be removed
	wp_enqueue_script('jquery');
 
	// register our main script but do not enqueue it yet
	wp_register_script( 'rentestate_loadmore', get_stylesheet_directory_uri() . '/js/article-cards.js', array('jquery') );
 
	// now the most interesting part
	// we have to pass parameters to article-cards.js script but we can get the parameters values only in PHP
	// you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
	wp_localize_script( 'rentestate_loadmore', 'article_loadmore_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
		'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 
 	wp_enqueue_script( 'rentestate_loadmore' );
}
 
add_action( 'wp_enqueue_scripts', 'rentestate_loadmore_scripts' );


function article_loadmore_ajax_handler(){
 
	// prepare our arguments for the query
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
	$args['post_status'] = 'publish';
 
	// it is always better to use WP_Query but not here
	query_posts( $args );
 
	if( have_posts() ) :
 
		// run the loop
		while( have_posts() ): the_post();
 
			// look into your theme code how the posts are inserted, but you can use your own HTML of course
			// do you remember? - my example is adapted for Twenty Seventeen theme
			get_template_part( 'template-parts/blocks/article-cards', get_post_format() );
			// for the test purposes comment the line above and uncomment the below one
			// the_title();
 
 
		endwhile;
 
	endif;
	die; // here we exit the script and even no wp_reset_query() required!
}
 
 
 
add_action('wp_ajax_loadmore', 'article_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'article_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}



// HTML5 Blank navigation
function html5blank_nav()
{
    wp_nav_menu(
        array(
            'theme_location' => 'header-menu',
            'menu' => '',
            'container' => 'div',
            'container_class' => 'menu-{menu slug}-container',
            'container_id' => '',
            'menu_class' => 'menu',
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'wp_page_menu',
            'before' => '',
            'after' => '',
            'link_before' => '',
            'link_after' => '',
            'items_wrap' => '<ul>%3$s</ul>',
            'depth' => 0,
            'walker' => ''
        )
    );
}

// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        wp_register_script('html5blankscripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('html5blankscripts'); // Enqueue it!
    }
}

// Load HTML5 Blank footer scripts
function html5blank_footer_scripts()
{
    wp_register_script('article-hero-main-slider', get_template_directory_uri() . '/js/article-hero.js', array('jquery'), '1.0.0'); // Conditional script(s)
    wp_enqueue_script('article-hero-main-slider'); // Enqueue it!  
    wp_register_script('horizontal-slider-main-slider', get_template_directory_uri() . '/js/horizontal-slider.js', array('jquery'), '1.0.0'); // Conditional script(s)
    wp_enqueue_script('horizontal-slider-main-slider'); // Enqueue it!  
}

// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// Load HTML5 Blank styles
function html5blank_styles()
{
    wp_register_style('html5blank', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('html5blank'); // Enqueue it!
}

// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar')) {
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions($html)
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ('div' == $args['style']) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }
    ?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?><?php comment_class(empty($args['has_children']) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
    <?php if ('div' != $args['style']) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
<?php endif; ?>
    <div class="comment-author vcard">
        <?php if ($args['avatar_size'] != 0) echo get_avatar($comment, $args['180']); ?>
        <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
    </div>
    <?php if ($comment->comment_approved == '0') : ?>
    <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
    <br/>
<?php endif; ?>

    <div class="comment-meta commentmetadata"><a
                href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>">
            <?php
            printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'), '  ', '');
        ?>
    </div>

    <?php comment_text() ?>

    <div class="reply">
        <?php comment_reply_link(array_merge($args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </div>
    <?php if ('div' != $args['style']) : ?>
    </div>
<?php endif; ?>
<?php }

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
//add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
//add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
//add_action('init', 'create_post_type_html5'); // Add our HTML5 Blank Custom Post Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination
add_action('wp_footer', 'html5blank_footer_scripts'); // Add Custom Scripts to wp_footer

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5()
{
    register_taxonomy_for_object_type('category', 'html5-blank'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'html5-blank');
    register_post_type('html5-blank', // Register Custom Post Type
        array(
            'labels' => array(
                'name' => __('HTML5 Blank Custom Post', 'html5blank'), // Rename these to suit
                'singular_name' => __('HTML5 Blank Custom Post', 'html5blank'),
                'add_new' => __('Add New', 'html5blank'),
                'add_new_item' => __('Add New HTML5 Blank Custom Post', 'html5blank'),
                'edit' => __('Edit', 'html5blank'),
                'edit_item' => __('Edit HTML5 Blank Custom Post', 'html5blank'),
                'new_item' => __('New HTML5 Blank Custom Post', 'html5blank'),
                'view' => __('View HTML5 Blank Custom Post', 'html5blank'),
                'view_item' => __('View HTML5 Blank Custom Post', 'html5blank'),
                'search_items' => __('Search HTML5 Blank Custom Post', 'html5blank'),
                'not_found' => __('No HTML5 Blank Custom Posts found', 'html5blank'),
                'not_found_in_trash' => __('No HTML5 Blank Custom Posts found in Trash', 'html5blank')
            ),
            'public' => true,
            'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail'
            ), // Go to Dashboard Custom HTML5 Blank post for supports
            'can_export' => true, // Allows export in Tools > Export
            'taxonomies' => array(
                'post_tag',
                'category'
            ) // Add Category and Post Tags support
        ));
}

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}

?>
