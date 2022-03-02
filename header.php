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