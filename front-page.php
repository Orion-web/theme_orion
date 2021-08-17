
<?php get_header();?>

<div<?php

    if ( $section_bg_img = get_theme_mod( 'section_bg_img' ) )
        echo ' style="background-image: url(' . $section_bg_img . ');"';

?>>
<?php the_content();?>
</div>





