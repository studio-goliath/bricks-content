<?php
if (get_row_layout() == 'parallax') {
    $image = get_sub_field('image');
    if ($image) {
        ?><div id="brick-parallax-<?php echo $image['ID']; ?>" class="brick-parallax"><img class="brick-parallax-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></div><?php
    }
}