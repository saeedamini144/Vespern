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
<main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8">

                    <figure class="portfolio-featur-img">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('', array(
                                'alt' => get_the_title(),
                                'class' => 'portfolio-featur-img',
                                'size' => 'large',
                                'title' => get_the_title()
                            ));
                        } else {
                            echo  '<h1>No image set </h1>';
                        }
                        ?>
                    </figure>
                    <div class="row">
                        <div class="portfolio-description">
                            <!-- <h2>This is an example of portfolio detail</h2> -->
                            <?php
                            if (have_posts()) {
                                while (have_posts()) {
                                    the_post();
                                    the_content();
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="comments">
                        <?php
                        comments_template('/custom-comments.php');
                        ?>
                    </div>
                    <!-- <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img
                                    src="assets/img/portfolio/portfolio-details-1.jpg"
                                    alt="" />
                            </div>

                            <div class="swiper-slide">
                                <img
                                    src="assets/img/portfolio/portfolio-details-2.jpg"
                                    alt="" />
                            </div>

                            <div class="swiper-slide">
                                <img
                                    src="assets/img/portfolio/portfolio-details-3.jpg"
                                    alt="" />
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div> -->
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category:</strong><?php the_terms(get_the_ID(), 'portfolio_category', " ", ","); ?></li>
                            <li><strong>Client: </strong><?php echo esc_html(get_post_meta($post->ID, 'Client', true)) ?></li>
                            <li><strong>Project date: </strong><?php the_time('j F, Y') ?></li>
                            <li>
                                <strong>Project URL</strong>:
                                <a rel="nofollow" href="<?php get_post_meta($post->ID, 'Project_URL', true) ?>"><?php echo get_post_meta($post->ID, 'Project_URL', true) ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Details Section -->
</main>
<!-- End #main -->
<?php
get_footer();
?>