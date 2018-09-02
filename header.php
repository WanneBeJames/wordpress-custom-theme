<!doctype html>
<html>
        <head>
            <meta charset="utf-8">
            <title>SteeperThanDeep</title>
            <?php wp_head(); ?>
</head>

<?php

    if( is_front_page() ):
        $wannebe_classes = array('wannebe-class', 'my-class');
    else:
        $wannebe_classes = array('no-wannebe-class');
    endif;

?>


<body <?php body_class( $wannebe_classes ); ?>>

    <?php wp_nav_menu(array('theme_location'=>'primary')); ?>