<?php
get_header();
?>
<section class=" title-header p-5">
    <div class="container">
        <!-- <h1><?php the_archive_title() ?></h1> -->
        <h1>
            <?php
            if (is_category()) {
                echo single_cat_title();
                // var_dump(single_cat_title());
            } else if (is_tag()) {
                echo single_tag_title();
            } else if (is_day()) {
                echo  get_the_date('j F');
            } else if (is_author()) {
                echo  get_the_author();
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
                get_template_part('template-parts/blogtemplate', 'archive');
            }
        }
        wp_reset_postdata(); //After looping through a separate query, this function restores the $post global to the current post in the main query.
        ?>
    </div>
    <div class="d-flex justify-content-center pt-3 pb-3">
        <?php the_posts_pagination(array(
            'mid_size'  => 2,
            'prev_text' => __('« Previuos Page', 'textdomain'),
            'next_text' => __('Next Page »', 'textdomain'),
            'show_all' => false,
        )) ?></div>
    <!-- <p>
        <?php echo category_description() ?> if we used category_description() and add it in the p tag it will be generat the empty p tag befor and afther it
        </p> -->
    <?php
    the_archive_description('<div class="taxonomy-description">', '</div>');
    ?>
</section>
<?php
get_footer();
?>