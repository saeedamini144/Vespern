<?php
$services_section_card = fw_get_db_customizer_option('services_section_card');
?>
<?php foreach ($services_section_card as $card_services) {
    if (!empty($services_section_card)) {
?>
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="<?php echo $card_services['services_icon'] ?>"></i></div>
                <h4 class="title"><a href=""><?php echo $card_services['services_title'] ?></a></h4>
                <p class="description"><?php echo $card_services['services_card_desc'] ?></p>
            </div>
        </div>
    <?php
    } else { //add display none class when user no content add
    ?>
        <div class="d-none col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="<?php echo $card_services['services_icon'] ?>"></i></div>
                <h4 class="title"><a href=""><?php echo $card_services['services_title'] ?></a></h4>
                <p class="description"><?php echo $card_services['services_card_desc'] ?></p>
            </div>
        </div>
<?php
    }
}
?>