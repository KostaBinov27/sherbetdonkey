<?php
$background_image_video = get_field( 'background_image_video' );
$title = get_field( 'title' );
$title_image = get_field( 'title_image' );
$video = get_field('video'); ?>

<div class="video-wrap-bg" style="background: url(<?php echo $background_image_video['url']; ?>)">
    <div class="container mt-100">
        <div class="row oposite">
            <div class="col-lg-10 m-auto">
                <h2><?php echo $title; ?></h2>
            </div>
            <div class="col-lg-2 imagetitle">
                <img src="<?php echo $title_image['url']; ?>" class="img-fluid">
            </div>
        </div>
        <div class="video-wrap">
            <?php print_r($video); ?>
        </div>
    </div>
</div>