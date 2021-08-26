
<?php get_header();?>

<div class="head">
        <?php get_custom_header();?>
        <?php $loop = new WP_Query((array('post_type' => 'headerlanding','order'=>'ASC'))); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                            <?php the_content() ?>

                    <?php endwhile; wp_reset_query(); ?>


        <?php $loop = new WP_Query((array('post_type' => 'videolanding','order'=>'ASC'))); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                            <?php the_content() ?>

                    <?php endwhile; wp_reset_query(); ?>

</div> <!-- ---fermeture head background--- -->

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









