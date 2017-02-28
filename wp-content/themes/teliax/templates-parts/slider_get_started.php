<section class="section mod-testimonial bg">
    <div class="slider slider-for">     
        <?php
        if (have_rows('main_slider')):
            while (have_rows('main_slider')):the_row();?>
                <div class="item" style="background-image: url(<?php the_sub_field('image'); ?>);">
                    <div class="table-div">
                        <div class="table-cell">
                            <div class="container">
                                <div class="text-testimonial">
                                    <?php the_sub_field('description'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
        endif; ?>
    </div>
    <div class="container">
        <div class="slider slider-nav">
        <?php
        if (have_rows('sub_slider')):
            while (have_rows('sub_slider')):the_row();?>
                <div class="item">
                    <div class="customer">
                        <div class="table-div">
                            <div class="table-cell">
                                <div class="avartar">
                                    <img src="<?php the_sub_field('avatar'); ?>" alt="">
                                </div>
                            </div>
                            <div class="table-cell">
                                <div class="cart-name">
                                    <h3><?php the_sub_field('name'); ?></h3>
                                    <p><?php the_sub_field('company'); ?><p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php 
            endwhile;
        endif;?>
        </div>
    </div>
</section>