<?php
if (get_row_layout() == 'slider') {
    $images = get_sub_field('images');
    if ($images) {
        ?>
        <div class="brick-slider-container">
            <?php foreach ($images as $image) { ?>
                <img class="brick-slider-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
            <?php } ?>
        </div>
        <?php
    }
}