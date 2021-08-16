<!DOCTYPE html>
<html lang="fr">
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
<div id="navbar" class="navcont">

<div class="logo"><?= get_custom_logo($blog_id)?></div>
  <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
</div>


    
