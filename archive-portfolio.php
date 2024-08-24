<?php
get_header();
?>
<section class="title-header p-5">
    <div class="container">
        <h1>
            <?php
            if (is_post_type_archive('portfolio')) {
                post_type_archive_title();
            } elseif (is_category()) {
                single_cat_title();
            } elseif (is_tag()) {
                single_tag_title();
            } elseif (is_day()) {
                echo get_the_date('j F');
            } elseif (is_author()) {
                echo get_the_author();
            }
            ?>
        </h1>
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
        ?>
    </div>
</section>
<section class="container">
    <div class="row">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/portfoliocard', 'archive');
            }
        }
        ?>
    </div>
    <div class="d-flex justify-content-center pt-3 pb-3">
        <?php the_posts_pagination(array(
            'mid_size'  => 2,
            'prev_text' => __('« Previous Page', 'textdomain'),
            'next_text' => __('Next Page »', 'textdomain'),
            'show_all'  => false,
        )); ?>
    </div>
</section>
<?php
get_footer();
?>