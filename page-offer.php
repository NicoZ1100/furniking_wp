<?php
/*
Template Name: Offer
*/
?>

<?php get_header(); ?>

<div class="offer">
    <div class="container">
        <div class="offer_wrapp">
            <div class="offer_wrapp_big"
            style="
                background: url('<?php the_field("offer_img_1");?>') center center/cover no-repeat
            ">
                <h2 class="offer_title"><?php the_field("offer_title_1");?></h2>
                <div class="offer_subtitle"><?php the_field("offer_subtitle_1");?></div>
                <a  href="#" class="offer_readme"><?php the_field("offer_readmore");?></a>
            </div>

            <div class="offer_wrapp_small">
                <div class="offer_wrapp_small_top"
                style="
                    background: url('<?php the_field("offer_img_2");?>') center center/cover no-repeat
                ">
                    <h2 class="offer_title"><?php the_field("offer_title_2");?></h2>
                    <div class="offer_subtitle"><?php the_field("offer_subtitle_2");?></div>
                    <a  href="#" class="offer_readme"><?php the_field("offer_readmore");?></a>
                </div>
                <div class="offer_wrapp_small_bottom"
                style="
                    background: url('<?php the_field("offer_img_3");?>') center center/cover no-repeat
                ">
                    <h2 class="offer_title"><?php the_field("offer_title_3");?></h2>
                    <div class="offer_subtitle"><?php the_field("offer_subtitle_3");?></div>
                    <a  href="#" class="offer_readme"><?php the_field("offer_readmore");?></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>