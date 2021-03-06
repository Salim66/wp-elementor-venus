<!--footer start-->
<footer class="app-footer bg-dark pb-0 border-0 text-md-left text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-md-0 mb-4">
                    <?php 
                        the_custom_logo();
                        if(!has_custom_logo()){
                    ?>
                    <a class="" href="<?php echo home_url(); ?>">
                    <img class="pr-3  mb-md-5 mb-3" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/logo-color.png"
                        =srcset="<?php echo get_stylesheet_directory_uri();?>/assets/img/logo-color@2x.png 2x" alt="">
                    <?php
                    }
                    ?>
                    <p class="text-muted pr-md-5 pr-0">A great and powerful collection of modern designed component pack
                        to build better website for your next project</p>
                </div>

                <div class="col-md-2 mb-md-0 mb-4">
                    <h6 class="mb-4">Platform</h6>
                    <?php
                        wp_nav_menu([
                            'theme_location'=>'footerl',
                            'menu_class'=>'footer-link'
                        ]);
                    ?>
                </div>
                <div class="col-md-2 mb-md-0 mb-4">
                    <h6 class="mb-4">Community</h6>
                    <?php
                        wp_nav_menu([
                            'theme_location'=>'footerm',
                            'menu_class'=>'footer-link'
                        ]);
                    ?>
                </div>
                <div class="col-md-2 mb-md-0 mb-4">
                    <h6 class="mb-4">Company</h6>
                    <?php
                        wp_nav_menu([
                            'theme_location'=>'footerr',
                            'menu_class'=>'footer-link'
                        ]);
                    ?>
                </div>
            </div>
        </div>
        <div class="app-secondary-footer mt-md-5 mt-3 text-center">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <span class="copyright">?? 2019 Venus. All right reserved.</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <?php 
    wp_footer();
    ?>

</body>

</html>