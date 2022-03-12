<?php
/*
Template Name: Special Offer
*/
?>

<?php get_header(); ?>

<section class="special_offer">
    <div class="container">
        <h2 class="special_offer_title">SPECIAL OFFER</h2>
        <div class="special_offer_wrapp">

            <div class="special_offer_wrapp_item"
                style="background: url('<?php the_field('special_img_1');?>')center center/cover no-repeat"
            >
                <div class="special_offer_wrapp_item_block">
                    <div class="special_offer_wrapp_item_title">
                        <?php the_field("special_title_1");?>
                    </div>
                    <div class="special_offer_wrapp_item_text">
                        <?php the_field("special_descr_1");?>
                    </div>
                    <div class="special_offer_wrapp_item_flex">
                        <div class="special_offer_wrapp_item_price">
                            <?php the_field("special_price_1");?> <span><?php the_field("special_price_was_1");?></span>
                        </div>
                        <button class="special_offer_wrapp_item_btn">shop now</button>
                    </div>
                    <div class="special_offer_round">
                        <div class="special_offer_round_item">
                            <div>10</div> 
                            <span>days</span>
                        </div>
                        <div class="special_offer_round_item">
                            <div>15</div> 
                            <span>hrs</span>
                        </div>
                        <div class="special_offer_round_item">
                            <div>30</div> 
                            <span>min</span>
                        </div>
                        <div class="special_offer_round_item">
                            <div>22</div> 
                            <span>secs</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="special_offer_wrapp_item"
                style="background: url('<?php the_field('special_img_2');?>')center center/cover no-repeat"
            >
                <div class="special_offer_wrapp_item_block">
                    <div class="special_offer_wrapp_item_title">
                        <?php the_field("special_title_2");?>
                    </div>
                    <div class="special_offer_wrapp_item_text">
                        <?php the_field("special_descr_2");?>
                    </div>
                    <div class="special_offer_wrapp_item_flex">
                        <div class="special_offer_wrapp_item_price">
                        <?php the_field("special_price_2");?> <span><?php the_field("special_price_was_2");?></span>
                        </div>
                        <button class="special_offer_wrapp_item_btn">shop now</button>
                    </div>
                    <div class="special_offer_round">
                        <div class="special_offer_round_item">
                            <div>15</div> 
                            <span>days</span>
                        </div>
                        <div class="special_offer_round_item">
                            <div>08</div> 
                            <span>hrs</span>
                        </div>
                        <div class="special_offer_round_item">
                            <div>20</div> 
                            <span>min</span>
                        </div>
                        <div class="special_offer_round_item">
                            <div>12</div> 
                            <span>secs</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>