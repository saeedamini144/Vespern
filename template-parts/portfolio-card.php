<?php
$portfplio_query = new WP_Query(
    array(
        'post_type' => 'portfolio',
        'posts_per_page' => '4',
        'orderby' => 'date'
    )
);
while ($portfplio_query->have_posts()) {
    $portfplio_query->the_post();
?>
    <div class="col-md-6 d-flex align-items-stretch">
        <div class="card" style='background-image: url("<?php the_post_thumbnail_url() ?>' data-aos="fade-up" data-aos-delay="100">
            <div class="card-body">
                <h5 class="card-title"><a href=""><?php the_title() ?></a></h5>
                <p class="card-text"><?php the_excerpt() ?></p>
                <div class="read-more"><a href="<?php the_permalink() ?>"><i class="bi bi-arrow-right"></i> Read More</a></div>
            </div>
        </div>
    </div>
<?php
}
wp_reset_postdata();
?>