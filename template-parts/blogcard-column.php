<div class="card mb-3 mt-4" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-5">
            <img src="<?php the_post_thumbnail_url() ?>" class="img-fluid post-img-column" alt="<?php the_title() ?>">
        </div>
        <div class="col-md-7">
            <div class="card-body">
                <a href="<?php the_permalink() ?>">
                    <h6 class="card-title"><?php the_title() ?></h6>
                </a>
                <!-- <p class="card-text">
                <?php
                if (has_excerpt()) {
                    the_excerpt();
                } else {
                }
                ?>
                </p> -->
                <span class="card-text"><small class="text-muted"><?php the_date() ?></small></span>
            </div>
        </div>
    </div>
</div>