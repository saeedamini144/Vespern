<?php
get_header();
?>
<section class=" title-header p-5">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
        ?>
    </div>
</section>
<section class="single-post-section container">
    <div class="row">
        <main class="mainBlog col-lg-8">

            <figure class="featur-img">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('', array(
                        'alt' => get_the_title(),
                        'class' => 'image-featur-class',
                        'size' => 'large',
                        'title' => get_the_title()
                    ));
                } else {
                    echo  '<h1>No image set </h1>';
                }
                ?>
            </figure>
            <div class="">
                <?php the_excerpt() ?>
                <ul class="post-info-list">
                    <?php
                    if (has_tag()) {
                    ?>
                        <li class="bi bi-tags"> <span class="post-tag"><?php the_tags() ?> / </span></li>
                    <?php
                    }
                    ?>
                    <li class="bi bi-calendar4-week"> <span class="post-date"><?php the_time('j F, Y') ?> / </span></li>
                    <li class="bi bi-chat-right-text"><span class="post-comment-count"><?php comments_number() ?> / </span></li>
                    <li class="bi bi-bookmarks">
                        <span>Categores:
                            <?php
                            $categories = get_the_category();
                            $seprator = " , ";
                            $output = " ";
                            if ($categories) {
                                foreach ($categories as $category) {
                                    $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $seprator;
                                }
                                echo trim($output, $seprator);
                            }
                            ?>
                        </span>
                    </li>
                </ul>
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }
                }
                ?>
                <div class="comments">
                    <?php
                    comments_template('/custom-comments.php');
                    ?>
                </div>
            </div>
        </main>
        <aside class="sidbar col-lg-4">
            <strong class="sidbar-title">Recent Post</strong>
            <?php
            $the_query = new WP_Query(
                array(
                    'post_type' => 'post',
                    'cat' => 5,
                    'posts_per_page' => '3',
                )
            );
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    get_template_part('template-parts/blogcard', 'column');
                }
            }
            // var_dump($the_query);
            wp_reset_postdata(); //After looping through a separate query, this function restores the $post global to the current post in the main query.
            ?>
            <strong class="sidbar-title">Advertising Banner</strong>
            <img class="w-100 mt-3" src="<?php bloginfo('template_url'); ?>/assets/img/more-services-3.jpg" alt="">
        </aside>
    </div>
</section>
<?php
get_footer();
?>

<!-- <?php
        $content = get_content();
        $content = str_replace('<p', '<p class="default-class"', $content); ?>

<div class="wrapper"><?php echo $content ?></div> -->
<!-- //if you want add class directly the best way is code above -->