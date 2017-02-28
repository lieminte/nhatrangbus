<div class="l-pricing">
    <div class="container">

        <div class="mod-pricing-mobile visible-xs2">
            <div class="text-content">
                <p>
                 <?php the_sub_field('text_message'); ?> <a href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('name_link'); ?>"><?php the_sub_field('name_link'); ?></a> <?php the_sub_field('text_call'); ?> 
             </p>
             <p>
                <?php the_sub_field('text_end'); ?>
            </p>
        </div>

            <?php
            if (have_rows('content')):
                while(have_rows('content')):the_row();?>
            <div class="table-pricing-mobile">
                <div class="plan-price">
                    <div class="head-table-pricing">
                        <h3><?php the_sub_field('title'); ?></h3>
                        <span class="plus-icon"></span>
                    </div>
                    <div class="content-plan-price">
                        <div class="box-price text-center">
                            <span class="price"><?php the_sub_field('price'); ?></span>
                            <span class="number-pricing"><?php the_sub_field('number_pricing'); ?></span>
                            <span class="mo"><?php the_sub_field('mo'); ?></span>
                        </div>
                        <div class="text-info">
                            <?php the_sub_field('text_info'); ?>
                        </div>
                     <div class="text-info-any">
                            <h3><i class="fa fa-check" aria-hidden="true"></i> Any Phone, Anytime</h3>
                            <ul>
                                <li>
                                    <span>US Outbound Calls & Local Inbound</span>
                                    <span>$0.02/min</span>
                                </li>
                                <li>
                                    <span>US Outbound Calls & Local Inbound</span>
                                    <span>$0.02/min</span>
                                </li>
                                <li>
                                    <span>US Outbound Calls & Local Inbound</span>
                                    <span>$0.02/min</span>
                                </li>
                            </ul>
                            <div class="plan-buy text-center">
                                <a href="#" title="Get started" class="btn btn-blue">Get started</a>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-desc compare">
                                Compare all Features
                                <span>A LA CARTE</span>
                            </div>
                            <div class="feature-desc">Unlimited network calling <br> (Teliax to Teliax)</div>
                            <div class="feature-desc">
                                E911
                                <span>$1.50/month</span>
                            </div>
                            <div class="feature-desc">Call Parking</div>
                            <div class="feature-desc">High-Def Calling</div>
                            <div class="feature-desc">
                                Conference Bridge 
                                <span>$5.00/month</span>
                            </div>
                            <div class="feature-desc">
                                International Calling
                                <span><a href="#" title="View rates">View rates</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
                <?php
                endwhile;
            endif; ?>                   
        </div>
    </div>
</div>