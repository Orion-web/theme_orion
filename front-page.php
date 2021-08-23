
<?php get_header();?>

<div class="head">

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








