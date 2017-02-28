<?php
    if (get_sub_field('banner_image') != null and get_sub_field('page_title') != null) :
?>
        <div id="fullpage">
            <section class="banner section">
                <div id="slide-banner" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#slide-banner" data-slide-to="0" class="active"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item bg active" style="background-image: url(<?php the_sub_field('banner_image')?>)">
                            <div class="table-div">
                                <div class="table-cell">
                                    <div class="container">
                                        <div class="text-banner">
                                            <h1><?php the_sub_field('page_title'); ?></h1>
                                            <p><?php the_sub_field('sub_title'); ?></p>
                                            <p>
                                                <a href="<?php the_sub_field('link_button_left') ?>" title="<?php the_sub_field('name_button_left') ?>" class="btn btn-blue"><?php the_sub_field('name_button_left') ?></a>
                                                <a href="<?php the_sub_field('link_button_right') ?>" title="<?php the_sub_field('name_button_right') ?>" class="btn btn-border2"><?php the_sub_field('name_button_right') ?></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<?php
    endif;
?>