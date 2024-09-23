<?php
$faq_card = fw_get_db_customizer_option('faq_card');
if (!empty($faq_card)) {
    foreach ($faq_card as $faq_card_data) {
?>
        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-5">
                <i class="<?php echo $faq_card_data['faq_icon'] ?>"></i>
                <h4><?php echo $faq_card_data['faq_question'] ?></h4>
            </div>
            <div class="col-lg-7">
                <p>
                    <?php echo $faq_card_data['faq_answer'] ?>
                </p>
            </div>
        </div><!-- End F.A.Q Item-->
<?php
    }
}
?>