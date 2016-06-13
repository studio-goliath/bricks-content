<?php
if (get_row_layout() == 'full-width-text') {
    $content = get_sub_field('content');
    if($content) {
        ?><div class="brick-full-width-text"><?php echo $content; ?></div><?php
    }
}