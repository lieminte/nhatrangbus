<?php 
    if (have_rows('main_slider')) :
        $str = "";
        $count = 0; 
        while (have_rows('main_slider')) : the_row(); // count slider
            $str = $str . '<li data-target="#slide-banner" data-slide-to="'.$count.'" class="'.get_sub_field('active_slider')[0].'"></li>';
            $count++;
        endwhile;?>        
        <section class="banner banner-internal <?php echo implode(" ", (array)get_sub_field('slider_category')); ?>">
            <div id="slide-banner" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php echo $str; ?>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
    <?php
    endif;
    // Get data slider
    if (have_rows('main_slider')) : 
        while (have_rows('main_slider')) : the_row();
            if (get_sub_field('slider_image') != null and get_sub_field('page_title') != null) : // Nếu không có dữ liệu thì không hiện ra?>
                    <div class="item bg <?php the_sub_field('active_slider');?> " style="background-image: url(<?php the_sub_field('slider_image');?>)">
                        <div class="table-div">
                            <div class="table-cell">
                                <div class="container">
                                    <div class="text-banner <?php the_sub_field('text_style'); ?>">
                                        <h1><?php the_sub_field('page_title'); ?></h1>
                                        <p><?php the_sub_field('sub_title'); ?></p>
                                        <?php if (get_sub_field('name_button') != null): ?>
                                            <p>
                                                <a href="<?php the_sub_field('link_button'); ?>" title="<?php the_sub_field('name_button'); ?>" class="btn btn-border2"><?php the_sub_field('name_button'); ?></a>
                                            </p>
                                        <?php endif; ?>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
            endif;    
        endwhile;
    endif;?>
                </div>
            </div>
        </section>      

<?php if (has_nav_menu('primary')): ?>
    <div class="l-navigation">
        <div class="container">
            <div class="mod-navigation menu-mobile">
                <div class="visible-xs li-active">
                    
                </div>
                   <?php
                    wp_nav_menu( array(
                      'theme_location' => 'primary',
                      'container' => 'ul',
                      'sub_menu' => true,
                      // 'depth' => 1,
                      'menu_class' => 'text-uppercase',
                    ) );?>
            </div>
        </div>
    </div>
<?php endif; ?>