<?php
$background_image = get_field( 'background_image' );
$title_section = get_field( 'title_section' );
$image_title = get_field( 'image_title' );
$small_description = get_field( 'small_description' );
$button = get_field('button');
$image_left_side = get_field('image_left_side');
$square_1_title = get_field('square_1_title');
$square_1_number = get_field('square_1_number');
$square_2_title = get_field('square_2_title');
$square_2_number = get_field('square_2_number');
$square_3_title = get_field('square_3_title'); 
$square_3_number = get_field('square_3_number'); 
$square_4_title = get_field('square_4_title'); 
$square_4_number = get_field('square_4_number'); ?>

<div class="beyond-section-wrap" style="background: url(<?php echo $background_image['url']; ?>)">
    <div class="container">
        <div class="row mb-80 oposite">
            <div class="col-lg-10 m-auto">
                <h2><?php echo $title_section; ?></h2>
            </div>
            <div class="col-lg-2">
                <img src="<?php echo $image_title['url']; ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 position-relative">
                <p><?php echo $small_description; ?></p>
                <a href="<?php echo $button['url'] ?>"><button class="btn btn-third"><?php echo $button['title']; ?></button></a>
                <img src="<?php echo $image_left_side['url'] ?>" class="img-fluid">
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 sq-1">
                        <p class="title"><?php echo $square_1_title; ?></p>
                        <p class="stats"><?php echo $square_1_number; ?></p>
                    </div>
                    <div class="col-lg-6 sq-2">
                        <p class="title"><?php echo $square_2_title; ?></p>
                        <p class="stats"><?php echo $square_2_number; ?></p>
                    </div>
                    <div class="col-lg-6 sq-3">
                        <p class="title"><?php echo $square_3_title; ?></p>
                        <p class="stats"><?php echo $square_3_number; ?></p>
                    </div>
                    <div class="col-lg-6 sq-4">
                        <p class="title"><?php echo $square_4_title; ?></p>
                        <p class="stats"><?php echo $square_4_number; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>