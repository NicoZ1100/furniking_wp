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