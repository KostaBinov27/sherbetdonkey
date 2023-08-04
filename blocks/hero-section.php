<?php

$background_image = get_field( 'background_image' );
$title = get_field( 'title' );
$subtitle = get_field( 'subtitle' );
$left_button = get_field('left_button');
$right_button = get_field('right_button'); ?>

<div class="hero-bg" style="background: url(<?php echo $background_image['url']; ?>)">
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-12">
                <h1><?php echo $title; ?></h1>
                <p><?php echo $subtitle; ?></p>
            </div>
            <div class="col-lg-2">
                <a href="<?php echo $left_button['url'] ?>">
                    <button class="btn btn-primary"><img src="https://onwebmax.com/sherbetdonkey/wp-content/uploads/2023/08/mobile-light-1.svg" class="img-fluid"><?php echo $left_button['title']; ?></button>
                </a>
            </div>
            <div class="col-lg-2">
                <a href="<?php echo $right_button['url'] ?>">
                    <button class="btn btn-secondary"><img src="https://onwebmax.com/sherbetdonkey/wp-content/uploads/2023/08/envelope-light-2.svg" class="img-fluid"><?php echo $right_button['title']; ?></button>
                </a>
            </div>
        </div>
        <img src="wp-content/uploads/2023/08/Group-3427.svg" class="img-fluid arrow-down">
    </div>
</div>
<div class="container slides-wrapper">
        <?php 
            if( have_rows('slides') ): ?>
                <div class="slides-projects">
                    <?php
                        while( have_rows('slides') ) : the_row();
                            $image = get_sub_field('image');
                            $client_name = get_sub_field('client_name');
                            $project_link = get_sub_field('project_link');
                            $industry_name = get_sub_field('industry_name');
                            $project_tags = get_sub_field('project_tags');
                            $p_tags = explode(",", $project_tags);
                            $increase = get_sub_field('increase');
                            $increase_text = get_sub_field('increase_text'); ?>
                            <div class="single-slide-project">
                                <img src="<?php echo $image['url']; ?>" class="img-fluid">
                                <div class="project-info-wrap">
                                    <div class="row">
                                        <div class="col-10">
                                            <p class="section-title">CLIENT</p>
                                            <p class="section-description"><?php echo $client_name; ?></p>
                                        </div>
                                        <div class="col-2">
                                            <a href="<?php echo $project_link['url']; ?>" target="_blank"><img src="wp-content/uploads/2023/08/Group-2991.svg" class="img-fluid"></a>
                                        </div>
                                        <div class="col-lg-12">
                                            <hr>
                                        </div>
                                        <div class="col-lg-12">
                                            <p class="section-title">INDUSTRY</p>
                                            <p class="section-description"><?php echo $industry_name; ?></p>
                                            <ul>
                                                <?php foreach ($p_tags as $taggs) {
                                                    echo '<li class="tags">'. $taggs .'</li>';
                                                } ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-12">
                                            <p class="percente"><?php echo $increase; ?></p>
                                        </div>
                                        <div class="col-lg-12">
                                            <p class="section-description"><?php echo $increase_text; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile; ?>
                </div>
            <?php
            endif; ?>
            <div class="arrows">
                <img class="pp2" src="wp-content/uploads/2023/08/Vector-1.svg">
                <img class="nn2" src="wp-content/uploads/2023/08/Vector-2.svg">
            </div>
    </div>
