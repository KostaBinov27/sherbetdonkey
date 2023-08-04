<?php
$title_section = get_field( 'title_section' ); ?>


<div class="container recent-projects-wrap">
    <div class="row mt-120 mb-80">
        <div class="col-lg-12">
            <h2><?php echo $title_section; ?></h2>
        </div>
    </div>
    <div class="row">
        <?php
            if( have_rows('projects') ):
                $counter = 1;
                while( have_rows('projects') ) : the_row();
                    $project_image = get_sub_field('project_image');
                    $project_title = get_sub_field('project_title');
                    $project_url = get_sub_field('project_url');
                    $project_tags = get_sub_field('project_tags');
                    $p_tags = explode(",", $project_tags); ?>
                    <div class="col-lg-6 <?php if ($counter == 1 || $counter == 2){ echo 'mb-5'; } ?>">
                        <div class="project-wrap">
                            <img src="<?php echo $project_image['url']; ?>" class="img-fluid w-100">
                            <div class="project-info-wrap">
                                <div class="row">
                                    <div class="col-10">
                                        <h4><?php echo $project_title; ?></h4>
                                    </div>
                                    <div class="col-2 text-right">
                                        <a href="<?php echo $project_url['url']; ?>"><img src="wp-content/uploads/2023/08/Group-2991.svg"></a>
                                    </div>
                                </div>
                                <hr>
                                <ul>
                                    <?php foreach ($p_tags as $taggs) {
                                        echo '<li class="tags">'. $taggs .'</li>';
                                    } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php
                $counter ++;
                endwhile;
            endif; ?>
    </div>
</div>

