<!DOCTYPE html>
<html lang="de">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">

<title><?php echo get_bloginfo( 'name' ); ?></title>
<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
</head>
<body>
    <div id="grid-container">
        <div id="menubutton" tabindex="0"></div>
        <div id="header-box-1"></div>
        <div id="header-box-2"></div>
        <div id="header-box-3"></div>
        <div id="navigation-box" class="navigation">
            <?php
                wp_nav_menu ( array (
                    'theme_location' => 'navigation_menu_location',
                    'container' => false,
                    'before' => '<p>',
                    'after' => '</p>' 
                ) );
                ?>
        </div>
        <div id="header-box-4">
            <?php
            if (has_post_thumbnail ()) :
                the_post_thumbnail ();
            else :
            ?>
            <img alt="<?php the_title(); ?>" src="<?php header_image(); ?>">
            <?php
            endif;
            ?>
        </div>
        <div id="header-box-5">
            <h2>Aktuell</h2>
            <p>Heute 19.30 Uhr</p>
            <p>Schulungsabend</p>
            <p>Schutz vor Gewalt und Missbrauch</p>
            <p>Mi, 25. Jan 2017, 17.00 – 19.00 Uhr</p>
            <p>Offenes Pastorenbüro</p>
            <p>So, 29. Jan 2017, 17.00 Uhr</p>
            <p>Lighthouse</p>
            <p>Der (etwas) andere Gottesdienst</p>
        </div>
