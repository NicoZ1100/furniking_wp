<?php
/*
Template Name: Latest Articles
*/
?>

<?php get_header(); ?>

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

<?php get_footer(); ?>