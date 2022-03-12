<?php
/*
Template Name: Trending
*/
?>

<?php get_header(); ?>

<section class="trending">
    <div class="container">
        <h2 class="trending_title">trending</h2>
        <ul class="trending_menu">
            <li class="trending_menu_item"><a href="#" class="trending_menu_item_link">Top Products</a></li>
            <li class="trending_menu_item"><a href="#" class="trending_menu_item_link">New Arrivals</a></li>
            <li class="trending_menu_item"><a href="#" class="trending_menu_item_link">Best Sellers</a></li>
        </ul>

        <div class="row">
            <?php
                // параметры по умолчанию
                $my_posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'trending',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                foreach( $my_posts as $post ){
                    setup_postdata( $post );
                    ?>
                        <div class="col-sm-6 col-md-5 offset-md-1 col-xl-3 col-lg-4 offset-lg-0">
                            <div class="trending_item">
                                <div class="trending_img 
                                    <?php
                                        $field = get_field("new_sale");
                                        if($field === "new"){
                                            ?>
                                                new
                                            <?php
                                        }else if($field === "sale"){
                                            ?>
                                                sale
                                            <?php
                                        }else{
                                            ?>
                                                discount
                                            <?php
                                        }
                                    ?>
                                "
                                style="
                                    background: url('<?php the_field("trending_img");?>') center center/cover no-repeat
                                "
                                >
                                    <div class="stuff_bg_flex">
                                        <div class="stuff_bg_flex_item">
                                            <img src="<?php echo bloginfo('template_url');?>/assets/icons/like.png" alt="like">
                                        </div>
                                        <div class="stuff_bg_flex_item">
                                            <img src="<?php echo bloginfo('template_url');?>/assets/icons/shopping.png" alt="like">
                                        </div>
                                        <div class="stuff_bg_flex_item">
                                            <img src="<?php echo bloginfo('template_url');?>/assets/icons/arrows.png" alt="like">
                                        </div>
                                        <div class="stuff_bg_flex_item">
                                            <img src="<?php echo bloginfo('template_url');?>/assets/icons/eye.png" alt="like">
                                        </div>
                                    </div>
                                </div>
                                <div class="trending_item_stuff"><?php the_field("trending_stuff");?></div>
                                <div class="trending_item_name"><?php the_field("trending_name");?></div>
                                <div class="trending_item_bottom">
                                    <div class="trending_item_bottom_price">
                                        <?php the_field("trending_price");?> <span><?php the_field("trending_price_was");?></span>
                                    </div>
                                    <div class="trending_item_bottom_stars">
                                        <img src="<?php echo bloginfo('template_url');?>/assets/icons/green_star.png" alt="star">
                                        <img src="<?php echo bloginfo('template_url');?>/assets/icons/green_star.png" alt="star">
                                        <img src="<?php echo bloginfo('template_url');?>/assets/icons/green_star.png" alt="star">
                                        <img src="<?php echo bloginfo('template_url');?>/assets/icons/green_star.png" alt="star">
                                        <img src="<?php echo bloginfo('template_url');?>/assets/icons/green_star.png" alt="star">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                }
                wp_reset_postdata(); // сброс
            ?>
        </div>

        <div class="trending_slider">
            <a href="#"><img src="<?php echo bloginfo('template_url');?>/assets/icons/trending_slider_gray.png" alt="slider"></a>
            <a href="#"><img src="<?php echo bloginfo('template_url');?>/assets/icons/trending_slider_green.png" alt="slider"></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>