<?php
$cta_title = get_field( 'cta_title' );
$left_button = get_field( 'left_button' );
$right_button = get_field( 'right_button' ); ?>

<div class="cta-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h4><?php echo $cta_title ?></h4>
            </div>
            <div class="col-lg-4 m-auto">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="<?php echo $left_button['url'] ?>">
                            <button class="btn btn-primary"><img src="https://onwebmax.com/sherbetdonkey/wp-content/uploads/2023/08/mobile-light-1.svg" class="img-fluid"><?php echo $left_button['title'] ?></button>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="<?php echo $right_button['url'] ?>">
                            <button class="btn btn-secondary"><img src="https://onwebmax.com/sherbetdonkey/wp-content/uploads/2023/08/envelope-light-2.svg" class="img-fluid"><?php echo $right_button['title'] ?></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>