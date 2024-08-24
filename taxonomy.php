<?php
get_header();
?>
<section class=" title-header p-5">
    <div class="container">
        <h1><?php single_term_title(); ?></h1>
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
        ?>
    </div>
</section>
<section class="container">
    <div class="row">
        <!-- <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        get_template_part('template-parts/blogtemplate', 'archive');
                    }
                }
                var_dump(have_posts());

                wp_reset_postdata(); //After looping through a separate query, this function restores the $post global to the current post in the main query.
                ?> -->
        <div class="col-md-4 col-lg-4 mb-2">
            <div class="card-post">
                <div class="card-img-holder">
                    <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
                </div>
                <a href="<?php the_permalink() ?>">
                    <h3 class="blog-title"><?php the_title() ?></h3>
                </a>
                <span class="blog-time"> <?php the_time('j F, Y') ?></span>
                <div class="description">
                    <?php
                    if (has_excerpt()) {
                        the_excerpt();
                    } else {
                    }
                    ?>
                </div>
                <div class="options">
                    <a class="read-more" href="<?php the_permalink() ?>"><span>Read Full Blog</span><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right pl-2 iconmove" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                        </svg></a>
                    <button class="btn-card"><?php the_category() ?></button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <h1>test page</h1>
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