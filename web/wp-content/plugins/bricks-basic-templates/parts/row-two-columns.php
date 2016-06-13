<?php
if (get_row_layout() == 'two-columns') {

    $column_left = get_sub_field('column_left');
    $column_right = get_sub_field('column_right');

    ?><div class="brick-row"><?php

        if ($column_left) {
            ?><div class="brick-col-half-width brick-col-left"><?php echo $column_left; ?></div><?php
        }

        if ($column_right) {
            ?><div class="brick-col-half-width brick-col-right"><?php echo $column_right; ?></div><?php
        }

    ?></div><?php

}