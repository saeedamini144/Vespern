<?php
$Team_card = fw_get_db_customizer_option('Team_card');

if (!empty($Team_card)) {
    foreach ($Team_card as $team) {
        // اطمینان حاصل کنید که تمام فیلدهای مهم پر شده‌اند
        if (!empty($team['Team_img']['url']) && !empty($team['Team_name']) && !empty($team['Team_postion'])) {
?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="<?php echo htmlspecialchars($team['Team_img']['url'], ENT_QUOTES, 'UTF-8') ?>" class="img-fluid" alt="">
                        <div class="social">
                            <?php
                            if (!empty($team['Team_social'])) {
                                foreach ($team['Team_social'] as $social_content) {
                                    if (!empty($social_content['Team_social_link']) && !empty($social_content['Team_social_icon'])) {
                            ?>
                                        <a href="<?php echo htmlspecialchars($social_content['Team_social_link'], ENT_QUOTES, 'UTF-8') ?>"><i class="<?php echo htmlspecialchars($social_content['Team_social_icon'], ENT_QUOTES, 'UTF-8') ?>"></i></a>
                            <?php
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4><?php echo htmlspecialchars($team['Team_name'], ENT_QUOTES, 'UTF-8') ?></h4>
                        <span><?php echo htmlspecialchars($team['Team_postion'], ENT_QUOTES, 'UTF-8') ?></span>
                    </div>
                </div>
            </div>
<?php
        } else {
            echo 'Some required fields are missing';
        }
    }
} else {
    echo 'No team card';
}
?>