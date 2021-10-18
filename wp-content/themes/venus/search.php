<?php 
get_header();
?>



    <!--page title start-->
    <section class="component-section section-top bg-gray">
        <!--<div class="hero-img bg-overlay" data-overlay="1" style="background-image: url(assets/img/price-banner.jpg);"></div>-->
        <div class="container">
            <div class="row justify-content-center align-items-center mt-5 text-lg-left text-center">
                <div class="col-md-12">
                    <!-- heading -->
                    <h4 class="font-weight-300 mb-0">
                        Search Result for <span class="font-weight-700">
                            <?php echo esc_html(get_search_query());?>
                        </span>
                    </h4>
                </div>
            </div>
        </div>
    </section>
    <!--page title end-->

    <!--search result start-->
    <div class="section-gap">
        <div class="container">
            <?php 
            while(have_posts()){
                the_post();
                ?>
                <div class="row justify-content-between mb-lg-5 mb-4">
                    <div class="col-md-7 ">
                        <div class="mb-4">
                            <h5 class=""><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                            <a href="<?php the_permalink();?>"><?php the_permalink();?></a>
                        </div>
                        <?php 
                        the_excerpt();
                        ?>    
                    </div>
                    <div class="col-md-3">
                        <?php the_post_thumbnail('medium');?>
                    </div>
                </div>
                <?php
            }
            ?>
            
            
        </div>
    </div>
    <!--search result end-->

<?php 
get_footer();
