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
        <?php
        // گرفتن اطلاعات تکسونومی فعلی
        $current_taxonomy = get_queried_object();

        // بررسی اینکه آیا در یک آرشیو تکسونومی هستیم
        if (is_tax() && $current_taxonomy) {
            $taxonomy_name = $current_taxonomy->taxonomy; // نام تکسونومی فعلی
            $term_slug = $current_taxonomy->slug; // اسلاگ ترم فعلی

            // پارامترهای WP_Query برای تکسونومی فعلی
            $args = array(
                'post_type' => 'portfolio', // نوع پست، می‌تواند custom post type نیز باشد
                'tax_query' => array(
                    array(
                        'taxonomy' => $taxonomy_name, // نام تکسونومی فعلی
                        'field'    => 'slug', // نوع فیلتر
                        'terms'    => $term_slug, // مقدار ترم فعلی
                    ),
                ),
            );

            // ساختن شی WP_Query
            $query = new WP_Query($args);

            // شروع حلقه
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    // نمایش محتوای پست
                    get_template_part('template-parts/portfoliocard', 'archive');
                }
                // بازگرداندن داده‌های پست به حالت اولیه
                wp_reset_postdata();
            } else {
                // اگر هیچ پستی پیدا نشد
                echo 'No post yet';
            }
        } else {
            echo 'در یک صفحه تکسونومی قرار ندارید.';
        }
        ?>

    </div>
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