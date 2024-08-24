<div class="col-md-4 col-lg-4 mb-2">
    <div class="card-post">
        <div class="card-img-holder">
            <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title_attribute();  ?>">
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
            <button class="btn-card"><?php echo get_the_term_list(get_the_ID(), 'portfolio_category', '', ', '); ?></button>
        </div>
    </div>
</div>