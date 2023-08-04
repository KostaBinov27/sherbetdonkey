<?php
$background_image = get_field( 'background_image' );
$title = get_field( 'title' );
$title_image = get_field( 'image_title' );
$image_left_side = get_field('image_left_side'); ?>

<div class="service-wrap-bg" style="background: url(<?php echo $background_image['url']; ?>)">
    <div class="container mt-100">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <h2><?php echo $title; ?></h2>
            </div>
            <div class="col-lg-2">
                <img src="<?php echo $title_image['url']; ?>" class="img-fluid">
            </div>
        </div>
        <div class="row mt-100">
            <div class="col-lg-2 mobile-imagefix">
                <img src="<?php echo $image_left_side['url']; ?>" class="img-fluid w-100">
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-9">
                <?php 
                    if( have_rows('services') ):
                        while( have_rows('services') ) : the_row();
                            $choose_image_side = get_sub_field('choose_image_side');
                            $image_service = get_sub_field('image_service_new');
                            $service_title = get_sub_field('service_title');
                            $service_offer = get_sub_field('service_offer');
                            $s_tags = explode(",", $service_offer);
                            $button = get_sub_field('button');
                            
                            if ($choose_image_side == 'left') { ?>
                                <div class="row">
                                    <div class="col-lg-5 mb-50">
                                        <img src="<?php echo $image_service['url']; ?>" class="img-fluid w-100">
                                    </div>
                                    <div class="col-lg-7 mb-50 text-service-wrap">
                                        <h4><?php echo $service_title; ?></h4>
                                        <hr>
                                        <p>We can offer:</p>
                                        <ul>
                                            <?php foreach ($s_tags as $taggs) {
                                                echo '<li class="tags">'. $taggs .'</li>';
                                            } ?>
                                        </ul>
                                        <a href="<?php echo $button['url'] ?>"><button class="btn btn-third"><?php echo $button['title'] ?></button></a>
                                    </div>
                                </div>
                            <?php 
                            } else { ?>
                                <div class="row oposite">
                                    <div class="col-lg-7 mb-50 text-service-wrap">
                                        <h4><?php echo $service_title; ?></h4>
                                        <hr>
                                        <p>We can offer:</p>
                                        <ul>
                                            <?php foreach ($s_tags as $taggs) {
                                                echo '<li class="tags">'. $taggs .'</li>';
                                            } ?>
                                        </ul>
                                        <a href="<?php echo $button['url'] ?>"><button class="btn btn-third"><?php echo $button['title'] ?></button></a>
                                    </div>
                                    <div class="col-lg-5 mb-50">
                                        <img src="<?php echo $image_service['url']; ?>" class="img-fluid w-100">
                                    </div>
                                </div>
                            <?php
                            }
                        endwhile;
                    endif;
                ?>
            </div>
        </div>
    </div>
</div>