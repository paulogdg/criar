 <script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/lib/jquery.bxslider.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/rainbow.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bx_styles/slider_criar.css" type="text/css" />
 <!-- =========================
     START TESTIMONIAL SECTION
============================== -->
    <section id="TESTIMONIAL" class="testimonial parallax">
        <div class="section_overlay">
            <section id="boxes-home" class="clearfix">
                  <div class="testimonial_caption">
                       <h2>Colaboradores</h2>
                   <h1>Quem ajuda a fazer a CRIAR MARKETING</h1>
                   
                    <div class="slider-wrapper theme-default">
                    
                      <?php
    $slide_query  = new WP_query(); 
    $slide_query->query( 'category_name=slide' );
    // Loop
    while ( $slide_query->have_posts() ) :
        $slide_query->the_post();
    ?>
             <div class="nivoSlider" id="slider">
                <figure>
                   <img width="126" height="292" src="<?php $cod= get_post_meta($post->ID, 'Img Slide', true); ?><?php echo $cod; ?>" />
                 </figure>
                    <h2><?php the_title(); ?></h2>
                      <p><?php the_excerpt(); ?></p>
                       </div>
                         <?php	
                           endwhile;
                            wp_reset_postdata();
                                ?>
                     </div>
            </section>
            <script type="text/javascript">
$(document).ready(function(){
  $('.slider6').bxSlider({
    slideWidth: 300,
    minSlides: 2,
    maxSlides: 3,
    startSlide: 2,
    slideMargin: 10
  });
});
</script>
</main>
    



    <!-- END TESTIMONIAL SECTION -->
