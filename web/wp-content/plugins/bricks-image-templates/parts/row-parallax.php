<?php
if (get_row_layout() == 'parallax') {
    $image = get_sub_field('image');
    $title = get_sub_field('title');
    $content = get_sub_field('content');
    $link = get_sub_field('link');
    if ($image) {
        ?>
        <div class="brick-parallax-container">
            <div id="brick-parallax-<?php echo $image['ID']; ?>" class="brick-parallax<?php echo $title || $content ? ' has-content' : ''; ?>">
                <img class="brick-parallax-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
            </div>
            <?php if ($title || $content) { ?>
                <div class="brick-parallax-content-container">
                    <?php if ($title) { ?><h2 class="brick-parallax-title"><?php echo $title; ?></h2><?php } ?>
                    <?php if ($content) { ?><div class="brick-parallax-content"><?php echo $content; ?></div><?php } ?>
                    <?php if ($link) { ?><a class="brick-parallax-link" href="<?php echo $link; ?>"><?php _e( "more" ); ?></a><?php } ?>
                </div>
            <?php } ?>
        </div><?php
    }
}