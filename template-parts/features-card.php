<?php
$featur_section_icon = fw_get_db_customizer_option('featur_section_icon');
if (!empty($featur_section_icon)) {
    foreach ($featur_section_icon as $featur_icon) {
?>
        <div class="col-lg-3 col-md-4 mb-3">
            <div class="icon-box">
                <i class="<?php echo $featur_icon['featur_icon'] ?>" style="color: <?php echo $featur_icon['featur_icon_color'] ?>;"></i>
                <h3><a href=""><?php echo $featur_icon['featur_icon_title'] ?></a></h3>
            </div>
        </div>
    <?php
    }
} else {
    ?>
    <div class="col-lg-3 col-md-4 d-none">
        <div class="icon-box d-none">
            <i class="<?php echo $featur_icon['featur_icon'] ?>" style="color: <?php echo $featur_icon['featur_icon_color'] ?>;"></i>
            <h3><a href=""><?php echo $featur_icon['featur_icon_title'] ?></a></h3>
        </div>
    </div>
<?php

}
?>