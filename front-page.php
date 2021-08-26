
<?php get_header();?>


        
<div <?php

if ( $section_bg_img = get_theme_mod( 'section_bg_img' ) )
    echo ' style="background-image: url(' . $section_bg_img . ');"';

                        
        the_content();

?>></div>



 <!-- ---fermeture head background--- -->

        <!-- ---ouverture middletext--- -->

<div class="middletext">
<?php $loop = new WP_Query((array('post_type' => 'middletext','order'=>'ASC'))); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                      
                            <?php the_content() ?>

                <?php endwhile; wp_reset_query(); ?>
</div>
        <!-- ---fermeture middletext--- -->
        <!-- ---ouverture middlepic--- -->
<div class="middlepic">
<?php $loop = new WP_Query((array('post_type' => 'middlepicture','order'=>'ASC'))); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                            <?php the_content() ?>

                <?php endwhile; wp_reset_query(); ?>
</div>
<!-- fermeture middlepic -->
<!-- ouverture pictograms -->
<div class="picto-skills">
<?php $loop = new WP_Query((array('post_type' => 'skillpictograms','order'=>'ASC'))); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                        <div class="maingrid">
                                <div></div>
                                        <div>
                                        <?php the_content() ?>
                                        </div>
                                <div></div>
                        </div>

                <?php endwhile; wp_reset_query(); ?>
</div>
<!-- fermeture pictograms -->
<!-- ouverture réalisations -->



<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">



                <?php $loop = new WP_Query((array('post_type' => 'realisations','order'=>'ASC'))); ?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        
                                <?php the_content() ?>

                        <?php endwhile; wp_reset_query(); ?>


    
<!--       <img class="d-block w-100" src="..." alt="First slide"> -->
    </div>
    <div class="carousel-item">
<!--       <img class="d-block w-100" src="..." alt="Second slide"> -->
    </div>
    <div class="carousel-item">
<!--       <img class="d-block w-100" src="..." alt="Third slide"> -->
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<!-- fermeture réalisations -->










