<?php
/*
Template Name: Our Products
*/
?>

<?php get_header(); ?>

<section class="products">
    <div class="container">
        <h2 class="products_title">our products</h2>
        <ul class="products_menu">
            <li class="products_menu_item"><a href="#" class="products_menu_item_link">All Products</a></li>
            <li class="products_menu_item"><a href="#" class="products_menu_item_link">Best Sellers</a></li>
            <li class="products_menu_item"><a href="#" class="products_menu_item_link">New Arrivals</a></li>
            <li class="products_menu_item"><a href="#" class="products_menu_item_link">Todays Deals</a></li>
        </ul>

        <div class="row">
            <?php
                // параметры по умолчанию
                $my_posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'products',
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

        <div class="products_pages">
            <button class="products_pages_btn">Next page</button>
            <div class="products_pages_count">
                <div class="products_pages_count_text">Page</div>
                <div class="products_pages_count_num">1</div>
                <div class="products_pages_count_of">of 100</div>
                <div class="products_pages_count_next">
                    <div class="products_pages_count_next_left">&lt;</div>
                    <div class="products_pages_count_next_right">&gt;</div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>