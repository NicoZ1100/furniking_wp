<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); echo " | "; bloginfo('description');?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <?php wp_head();?>
</head>
<body>

    <header>
        <div class="up">
            <div class="container">
                <div>
                    Welcome to our online shop
                </div>
                <div>
                    <div class="up_lang">
                        English (USD)
                    </div>
                    <div class="up_login">
                        <a href="#" class="up_login_link">Login or Sign up</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="fur">
                <div class="fur_logo">
                    <?php the_custom_logo();?>
                </div>
                <div class="fur_search">
                    <form action="#" method="post">
                        <input type="search" class="fur_search_input" placeholder="Search here"><button type="submit" class="fur_search_btn"><img src="<?php echo bloginfo('template_url');?>/assets/icons/find.png" alt=""></button>
                    </form>
                </div>
                <!-- <div class="fur_categories">
                    categories
                </div> -->
                <div class="fur_account">
                    <a href="#"><img src="<?php echo bloginfo('template_url');?>/assets/icons/icon_shop.svg" alt="shop" class="fur_account_img"></a>
                    <div class="four">4</div>
                    <a href="#"><img src="<?php echo bloginfo('template_url');?>/assets/icons/bell.svg" alt="bell" class="fur_account_img"></a>
                    <a href="#"><img src="<?php echo bloginfo('template_url');?>/assets/icons/avatar.svg" alt="avatar" class="fur_account_img"></a>
                </div>
            </div>
        </div>

        <div class="promo">
            <div class="container">
                <div class="promo_wrapp">
                    <aside>
                        <div class="promo_aside">
                            <div class="promo_aside_sandwich">
                                <span class="promo_aside_sandwich_1 mb_sandwich"></span> 
                                <span class="promo_aside_sandwich_2 mb_sandwich"></span> 
                                <span class="promo_aside_sandwich_3 mb_sandwich"></span> 
                            </div>
                            <div class="promo_aside_title">
                                all collections
                            </div>
                        </div>
                        <ul class="promo_aside_menu">
                            <li class="promo_aside_menu_item"><a href="#" class="promo_aside_menu_item_link">All</a></li>
                            <li class="promo_aside_menu_item"><a href="#" class="promo_aside_menu_item_link">New Arrivals</a></li>
                            <li class="promo_aside_menu_item"><a href="#" class="promo_aside_menu_item_link">Hot Sale</a></li>
                            <li class="promo_aside_menu_item"><a href="#" class="promo_aside_menu_item_link">Furniture</a></li>
                            <li class="promo_aside_menu_item"><a href="#" class="promo_aside_menu_item_link">Amrature</a></li>
                            <li class="promo_aside_menu_item"><a href="#" class="promo_aside_menu_item_link">Tabble</a></li>
                            <li class="promo_aside_menu_item"><a href="#" class="promo_aside_menu_item_link">Chair</a></li>
                            <li class="promo_aside_menu_item"><a href="#" class="promo_aside_menu_item_link">Sofa</a></li>
                            <li class="promo_aside_menu_item"><a href="#" class="promo_aside_menu_item_link">Mirrors</a></li>
                            <li class="promo_aside_menu_item"><a href="#" class="promo_aside_menu_item_link">Stools</a></li>
                            <li class="promo_aside_menu_item"><a href="#" class="promo_aside_menu_item_link">Benches</a></li>
                        </ul>
                    </aside>
                
                    <div>
                        <nav>
                            <ul class="promo_menu">
                                <li class="promo_menu_item"><a href="#" class="promo_menu_item_link">Home</a></li>
                                <li class="promo_menu_item"><a href="#" class="promo_menu_item_link">Shop</a></li>
                                <li class="promo_menu_item"><a href="#" class="promo_menu_item_link">Blog</a></li>
                                <li class="promo_menu_item"><a href="#" class="promo_menu_item_link">About</a></li>
                                <li class="promo_menu_item"><a href="#" class="promo_menu_item_link">Contacts us</a></li>
                            </ul>
                        </nav>
                        <div class="promo_baner">
                            <div class="promo_baner_serve">
                                <h2 class="promo_baner_serve_title"><?php the_field("banner_collection");?></h2>
                                <h1 class="promo_baner_serve_header"><?php the_field("banner_title");?></h1>
                                <h2 class="promo_baner_serve_subtitle"><?php the_field("banner_subtitle");?></h2>
                                <button class="promo_baner_serve_btn">shop now</button>
                            </div>
                            <div class="promo_baner_img">
                                <img src="<?php echo bloginfo('template_url');?>/assets/img/chairs/main_baner_chair.png" alt="baner_img">
                                <div class="promo_baner_discount"><?php the_field("banner_discount");?></div>
                            </div>
                            <div class="promo_baner_list">
                                <div class="promo_baner_list_item">
                                    <div class="promo_baner_list_item_img">
                                        <img src=<?php the_field("banner_img_1");?>>
                                    </div>
                                    <div class="promo_baner_list_item_price"><?php the_field("banner_price_1");?></div>
                                    <div class="promo_baner_list_item_descr"><?php the_field("banner_descr_1");?></div>
                                </div>
                                <div class="promo_baner_list_item">
                                    <div class="promo_baner_list_item_img">
                                        <img src=<?php the_field("banner_img_2");?>>
                                    </div>
                                    <div class="promo_baner_list_item_price"><?php the_field("banner_price_2");?></div>
                                    <div class="promo_baner_list_item_descr"><?php the_field("banner_descr_2");?></div>
                                </div>
                                <div class="promo_baner_list_item">
                                    <div class="promo_baner_list_item_img">
                                        <img src=<?php the_field("banner_img_3");?>>
                                    </div>
                                    <div class="promo_baner_list_item_price"><?php the_field("banner_price_3");?></div>
                                    <div class="promo_baner_list_item_descr"><?php the_field("banner_descr_3");?></div>
                                </div>
                            </div>
                            <div class="promo_baner_slide">
                                <div class="promo_baner_slide_item"></div>
                                <div class="promo_baner_slide_item"></div>
                                <div class="promo_baner_slide_item promo_baner_slide_item_active"></div>
                                <div class="promo_baner_slide_item"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="feature">
        <div class="container">
            <div class="feature_wrapp">
                <div class="feature_item">
                    <div class="feature_item_icon">
                        <img src=<?php the_field("feature_icon_1");?>>
                    </div>
                    <div class="feature_item_descr">
                        <div class="feature_item_descr_title"><?php the_field("feature_title_1");?></div>
                        <div class="feature_item_descr_text"><?php the_field("feature_descr_1");?></div>
                    </div>
                </div>
                <div class="feature_item">
                    <div class="feature_item_icon">
                        <img src=<?php the_field("feature_icon_2");?>>
                    </div>
                    <div class="feature_item_descr">
                        <div class="feature_item_descr_title"><?php the_field("feature_title_2");?></div>
                        <div class="feature_item_descr_text"><?php the_field("feature_descr_2");?></div>
                    </div>
                </div>
                <div class="feature_item">
                    <div class="feature_item_icon">
                        <img src=<?php the_field("feature_icon_3");?>>
                    </div>
                    <div class="feature_item_descr">
                        <div class="feature_item_descr_title"><?php the_field("feature_title_3");?></div>
                        <div class="feature_item_descr_text"><?php the_field("feature_descr_3");?></div>
                    </div>
                </div>
                <div class="feature_item">
                    <div class="feature_item_icon">
                        <img src=<?php the_field("feature_icon_4");?>>
                    </div>
                    <div class="feature_item_descr">
                        <div class="feature_item_descr_title"><?php the_field("feature_title_4");?></div></div>
                        <div class="feature_item_descr_text"><?php the_field("feature_descr_4");?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                <div class="col-md-6">
                    <div class="articles_item articles_item_bg_1">
                        <div class="articles_item_wrapp">
                            <div class="articles_item_wrapp_top">
                                <div class="articles_item_wrapp_top_label">Furniture</div>
                                <div class="articles_item_wrapp_top_date">23 September 2022</div>
                            </div>
                            <h2 class="articles_item_wrapp_title">
                                Begineer guide buying minimal sofa
                            </h2>
                            <a href="#" class="articles_item_wrapp_readmore">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="articles_item articles_item_bg_2">
                        <div class="articles_item_wrapp">
                            <div class="articles_item_wrapp_top">
                                <div class="articles_item_wrapp_top_label">TABLE</div>
                                <div class="articles_item_wrapp_top_date">23 September 2022</div>
                            </div>
                            <h2 class="articles_item_wrapp_title">
                                Buying best minimal computer table
                            </h2>
                            <a href="#" class="articles_item_wrapp_readmore">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="articles_item articles_item_bg_3">
                        <div class="articles_item_wrapp">
                            <div class="articles_item_wrapp_top">
                                <div class="articles_item_wrapp_top_label">Bench</div>
                                <div class="articles_item_wrapp_top_date">23 march 2022</div>
                            </div>
                            <h2 class="articles_item_wrapp_title">
                                How to choose best modern bench
                            </h2>
                            <a href="#" class="articles_item_wrapp_readmore">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="articles_item articles_item_bg_4">
                        <div class="articles_item_wrapp">
                            <div class="articles_item_wrapp_top">
                                <div class="articles_item_wrapp_top_label">Chair</div>
                                <div class="articles_item_wrapp_top_date">23 march 2022</div>
                            </div>
                            <h2 class="articles_item_wrapp_title">
                                Best Summer Outfit <br> Style in this Country
                            </h2>
                            <a href="#" class="articles_item_wrapp_readmore">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer_wrapp">
                <div class="footer_wrapp_item">
                    <?php the_custom_logo();?>
                    <div class="footer_wrapp_item_text">
                        Funking is the a popular Ecommerce site.<br> Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit, sed do eiusmod tempor
                    </div>
                    <div class="footer_wrapp_item_social">
                        <a href="#"><img src="<?php echo bloginfo('template_url');?>/assets/icons/social_facebook.svg" alt="social" class="footer_wrapp_item_social_link"></a>
                        <a href="#"><img src="<?php echo bloginfo('template_url');?>/assets/icons/social_twitter.svg" alt="social" class="footer_wrapp_item_social_link"></a>
                        <a href="#"><img src="<?php echo bloginfo('template_url');?>/assets/icons/social_instagram.svg" alt="social" class="footer_wrapp_item_social_link"></a>
                        <a href="#"><img src="<?php echo bloginfo('template_url');?>/assets/icons/social_pinterset.svg" alt="social" class="footer_wrapp_item_social_link"></a>
                    </div>
                </div>

                <div class="footer_wrapp_item">
                    <h3 class="footer_wrapp_item_title">Help</h3>
                    <ul class="footer_wrapp_item_menu">
                        <li class="footer_wrapp_item_menu_li"><a href="#" class="footer_wrapp_item_menu_li_link">Privacy Policy</a></li>
                        <li class="footer_wrapp_item_menu_li"><a href="#" class="footer_wrapp_item_menu_li_link">Shipping & Delivery</a></li>
                        <li class="footer_wrapp_item_menu_li"><a href="#" class="footer_wrapp_item_menu_li_link">Refund Policy</a></li>
                        <li class="footer_wrapp_item_menu_li"><a href="#" class="footer_wrapp_item_menu_li_link">Track Your Order</a></li>
                    </ul>
                </div>

                <div class="footer_wrapp_item">
                    <h3 class="footer_wrapp_item_title">Store</h3>
                    <ul class="footer_wrapp_item_menu">
                        <li class="footer_wrapp_item_menu_li"><a href="#" class="footer_wrapp_item_menu_li_link">Furniture</a></li>
                        <li class="footer_wrapp_item_menu_li"><a href="#" class="footer_wrapp_item_menu_li_link">Tabble</a></li>
                        <li class="footer_wrapp_item_menu_li"><a href="#" class="footer_wrapp_item_menu_li_link">Sofa</a></li>
                        <li class="footer_wrapp_item_menu_li"><a href="#" class="footer_wrapp_item_menu_li_link">Other</a></li>
                    </ul>
                </div>

                <div class="footer_wrapp_item">
                    <h3 class="footer_wrapp_item_title">Supports</h3>
                    <ul class="footer_wrapp_item_menu">
                        <li class="footer_wrapp_item_menu_li"><a href="#" class="footer_wrapp_item_menu_li_link">Feedbcak</a></li>
                        <li class="footer_wrapp_item_menu_li"><a href="#" class="footer_wrapp_item_menu_li_link">Contact us</a></li>
                        <li class="footer_wrapp_item_menu_li"><a href="#" class="footer_wrapp_item_menu_li_link">Download app</a></li>
                        <li class="footer_wrapp_item_menu_li"><a href="#" class="footer_wrapp_item_menu_li_link">Terms conditins</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer_bottom">
            <div class="container">
                <div class="footer_bottom_flex">
                    <div class="footer_bottom_rights">&copy; 2021 Funking - All rights reserved.</div>
                    <div class="footer_bottom_privacy">
                        <ul class="footer_bottom_privacy_menu">
                            <li class="footer_bottom_privacy_menu_li"><a href="#" class="footer_bottom_privacy_menu_li_link">Privacy</a></li>
                            <li class="footer_bottom_privacy_menu_li"><a href="#" class="footer_bottom_privacy_menu_li_link">Security</a></li>
                            <li class="footer_bottom_privacy_menu_li"><a href="#" class="footer_bottom_privacy_menu_li_link">Terms</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <?php wp_footer();?>
</body>
</html>