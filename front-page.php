
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








<div <?php

                if ( $section_bg_img = get_theme_mod( 'section_bg_img' ) )
                echo ' style="background-image: url(' . $section_bg_img . ');"';

                        ?>
                        
                        <?php
                        echo do_shortcode('[smartslider3 slider="2"]');
                        ?>
                        
                        <?php


                ?>>


</div>



<!-- fermeture réalisations -->










