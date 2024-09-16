<?php
$testimonial_card = fw_get_db_customizer_option('testimonial_card');
if (!empty($testimonial_card)) {
    foreach ($testimonial_card as $testimonial) {
?>
        <div class="swiper-slide">
            <div class="testimonial-wrap">
                <div class="testimonial-item">
                    <img src="<?php echo $testimonial['testimonial_pic']['url'] ?>" class="testimonial-img" alt="">
                    <h3><?php echo $testimonial['testimonial_name'] ?></h3>
                    <h4><?php echo $testimonial['testimonial_position'] ?></h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        <?php echo $testimonial['testimonial_desc'] ?>
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>
            </div>
        </div><!-- End testimonial item -->
    <?php
    }
} else {
    ?>
    <div class="swiper-slide d-none">
        <div class="testimonial-wrap">
            <div class="testimonial-item">
                <img src="<?php echo $testimonial['testimonial_pic'] ?>" class="testimonial-img" alt="">
                <h3><?php echo $testimonial['testimonial_name'] ?></h3>
                <h4><?php echo $testimonial['testimonial_position'] ?></h4>
                <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <?php echo $testimonial['testimonial_desc'] ?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
            </div>
        </div>
    </div><!-- End testimonial item -->
<?php
}
?>