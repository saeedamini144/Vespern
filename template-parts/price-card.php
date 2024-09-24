<?php
$price_card = fw_get_db_customizer_option('price_card');
if (!empty($price_card)) {
    foreach ($price_card as $price_card_content) {
        // var_dump($price_card_content);
?>
        <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="zoom-in-right" data-aos-delay="200">
                <h3><?php echo $price_card_content['package_name'] ?></h3>
                <h4><sup><?php echo $price_card_content['money_sign'] ?></sup><?php echo $price_card_content['money_number'] ?><span> / <?php echo $price_card_content['money_time'] ?></span></h4>
                <ul>
                    <?php
                    if (!empty($price_card_content['price_item'])) {
                        foreach ($price_card_content['price_item'] as $price_item_content) {
                            // چک کردن وضعیت چک‌باکس
                            $line_through_class = $price_item_content['line_through'] ? 'line-through' : '';
                    ?>
                            <li class="<?php echo $line_through_class; ?>"><?php echo $price_item_content['price_item_data'] ?></li>
                    <?php
                        }
                    }
                    ?>
                </ul>
                <div class="btn-wrap">
                    <a href="<?php echo $price_card_content['price_button_link'] ?>" class="btn-buy"><?php echo $price_card_content['price_button'] ?></a>
                </div>
            </div>
        </div>

<?php
    }
}
?>