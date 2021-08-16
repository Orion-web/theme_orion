<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?></title>
    <?php wp_head();?>
    <link rel="stylesheet" href="<?php get_stylesheet_uri();?>">
</head>
<body>
<?php wp_body_open();?>

<div class="container">
<?= get_custom_logo()?>
<?php
wp_nav_menu( array(
    'theme_location' => 'my-custom-menu',
    'container_class' => 'custom-menu-class',
    'menu_class' => 'nav'
    ));
?>
</div>



    
