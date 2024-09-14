<?php
$about_secton_counter = fw_get_db_customizer_option('about_secton_counter');

?>
<?php if (!empty($about_secton_counter)) {
    foreach ($about_secton_counter as $counter_item) { ?>
        <div class="col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
                <i class="<?php echo $counter_item['counter_icon'] ?>"></i>
                <span data-purecounter-start="0" data-purecounter-end="<?php
                                                                        if (!empty($counter_item['counter_number'])) {
                                                                            echo $counter_item['counter_number'];
                                                                        } else {
                                                                            echo ' ';
                                                                        }
                                                                        ?>" data-purecounter-duration="1" class="purecounter"></span>
                <h3><?php echo $counter_item['counter_title'] ?></h3>
                <?php echo $counter_item['counter_desc'] ?>
            </div>
        </div>
<?php
    }
} else {
    return  null;
}
?>