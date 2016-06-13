<?php
if (get_row_layout() == 'full-width-image') {
    $image = get_sub_field('image');
    if ($image) {
        ?><img class="brick-full-width-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /><?php
    }
}