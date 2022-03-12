<?php get_header();?>

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

    <section class="reviews">
        <div class="container">
            <h2 class="reviews_title">What Our Customer Says</h2>
            <img src="<?php echo bloginfo('template_url');?>/assets/img/reviews/reviews_foto_1.png" alt="foto_1" class="reviews_foto">
            <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    <div class="reviews_text">
                        I like Furniking.com and as compared to other company it's polices and customers support is very good easy to reach., also many time they unable to delivered. The ultricies are pregnant while the quis is suspended. Risus commodo viverra maecenas accumsan lacus vel facilisist amet.
                        <a href="#"><img src="<?php echo bloginfo('template_url');?>/assets/icons/reviews_left.svg" alt="left" class="reviews_text_left"></a>
                        <a href="#"><img src="<?php echo bloginfo('template_url');?>/assets/icons/reviews_right.svg" alt="right" class="reviews_text_right"></a>
                    </div>
                </div>
            </div>
            <div class="reviews_name">
                Angelina Joly
            </div>
            <div class="reviews_profession">
                Co-founder
            </div>
        </div>
    </section>
    
    <section class="articles">
        <div class="container">
            <h2 class="articles_title">Our Latest Articles</h2>
            <div class="row">
                <?php
                    // параметры по умолчанию
                    $my_posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'articles',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                        ?>
                            <div class="col-md-6">
                                <div class="articles_item"
                                    style="
                                        background: url('<?php the_field("articles_img");?>') center center/cover no-repeat;
                                    "
                                >
                                    <div class="articles_item_wrapp">
                                        <div class="articles_item_wrapp_top">
                                            <div class="articles_item_wrapp_top_label"><?php the_field("articles_label");?></div>
                                            <div class="articles_item_wrapp_top_date"><?php the_field("articles_date");?></div>
                                        </div>
                                        <h2 class="articles_item_wrapp_title">
                                            <?php the_field("articles_title");?>
                                        </h2>
                                        <a href="#" class="articles_item_wrapp_readmore"><?php the_field("articles_readmore");?></a>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                    wp_reset_postdata(); // сброс
                ?>
            </div>
        </div>
    </section>

    <?php get_footer();?>