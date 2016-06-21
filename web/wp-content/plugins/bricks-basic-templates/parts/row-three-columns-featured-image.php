<?php
if (get_row_layout() == 'three-columns-featured-image') {

    // First column

    $first_column_image = get_sub_field('first_column_image');
    $first_column_title = get_sub_field('first_column_title');
    $first_column_content = get_sub_field('first_column_content');
    $first_column_link = get_sub_field('first_column_link');

    // Second column

    $second_column_image = get_sub_field('second_column_image');
    $second_column_title = get_sub_field('second_column_title');
    $second_column_content = get_sub_field('second_column_content');
    $second_column_link = get_sub_field('second_column_link');

    // Third column

    $third_column_image = get_sub_field('third_column_image');
    $third_column_title = get_sub_field('third_column_title');
    $third_column_content = get_sub_field('third_column_content');
    $third_column_link = get_sub_field('third_column_link');

    ?><div class="brick-row"><?php

        if($first_column_image || $first_column_title || $first_column_content || $first_column_link) {
            ?>
            <div class="brick-three-col">
                <?php
                if ($first_column_link) {
                    ?><a class="brick-three-col-link" href="<?php echo $first_column_link; ?>"><?php
                }
                if ($first_column_image) {
                    ?><img class="brick-three-col-image" src="<?php echo $first_column_image['url']; ?>" alt="<?php echo $first_column_image['alt'] ?>" /><?php
                }
                if ($first_column_title) {
                    ?><h2 class="brick-three-col-title"><?php echo $first_column_title; ?></h2><?php
                }
                if ($first_column_content) {
                    ?><div class="brick-three-col-content"><?php echo $first_column_content; ?></div><?php
                }
                if ($first_column_link) {
                    ?></a><?php
                }
                ?>
            </div>
            <div class="brick-three-col">
                <?php
                if ($second_column_link) {
                    ?><a class="brick-three-col-link" href="<?php echo $second_column_link; ?>"><?php
                }
                if ($second_column_image) {
                    ?><img class="brick-three-col-image" src="<?php echo $second_column_image['url']; ?>" alt="<?php echo $second_column_image['alt'] ?>" /><?php
                }
                if ($second_column_title) {
                    ?><h2 class="brick-three-col-title"><?php echo $second_column_title; ?></h2><?php
                }
                if ($second_column_content) {
                    ?><div class="brick-three-col-content"><?php echo $second_column_content; ?></div><?php
                }
                if ($second_column_link) {
                    ?></a><?php
                }
                ?>
            </div>
            <div class="brick-three-col">
                <?php
                if ($third_column_link) {
                    ?><a class="brick-three-col-link" href="<?php echo $third_column_link; ?>"><?php
                }
                if ($third_column_image) {
                    ?><img class="brick-three-col-image" src="<?php echo $third_column_image['url']; ?>" alt="<?php echo $third_column_image['alt'] ?>" /><?php
                }
                if ($third_column_title) {
                    ?><h2 class="brick-three-col-title"><?php echo $third_column_title; ?></h2><?php
                }
                if ($third_column_content) {
                    ?><div class="brick-three-col-content"><?php echo $third_column_content; ?></div><?php
                }
                if ($third_column_link) {
                    ?></a><?php
                }
                ?>
            </div>
            <?php
        }

    ?></div><?php

}