<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
    <meta charset="utf-8">

    <title><?php is_home() ? bloginfo('name') : wp_title('|', true, 'right') . bloginfo('name') ?></title>
    
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

    <!-- Google Chrome Frame for IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!-- mobile meta (hooray!) -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- Google web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600' rel='stylesheet' type='text/css'>
    <!-- wordpress head functions -->
    <?php wp_head(); ?>
    <!-- end of wordpress head -->

    <?php if (is_home()): // Override Yoast og:description ?>
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <?php endif; ?>

    <!-- drop Google Analytics Here -->
    <!-- end analytics -->

</head>

<body <?php body_class(); ?>>

<div id="container">

    <header class="header" role="banner">

        <div id="header-top" class="wrap clearfix"> 
            <div id="social-media">
                <a href="https://www.facebook.com/SilverSoundz"><img src="<?php echo get_template_directory_uri(); ?>/library/images/facebook128.svg" alt="Facebook" class="social"/></a>
                <a href="https://twitter.com/silversoundz"><img src="<?php echo get_template_directory_uri(); ?>/library/images/twitter128.svg" alt="Twitter" class="social" /></a>
                <a href="https://soundcloud.com/silversoundz"><img src="<?php echo get_template_directory_uri(); ?>/library/images/soundcloud128.svg" alt="Soundcloud" class="social" /></a>
                <a href="http://silversoundz.tumblr.com"><img src="<?php echo get_template_directory_uri(); ?>/library/images/tumblr128.svg" alt="Tumblr" class="social" /></a>
                <a href="http://www.last.fm/user/SilverSoundz"><img src="<?php echo get_template_directory_uri(); ?>/library/images/lastfm128.svg" alt="Tumblr" class="social" /></a>
            </div> <!-- end social media -->
        </div> <!-- end header top --> 
            
                    <div id="header-image" class="clearfix">
      <!--     <div id="logo" class="clearfix"> -->
             <a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/sslogo2.svg" alt="SilverSoundz" class="logo-img"/><?php /* bloginfo('name'); */?></a>
           <!-- </div> -->
            </div> <!-- end #header-image -->
        <div id="inner-header" class="wrap clearfix"> 
            <div id="header-log-nav" class="clearfix">
               <nav role="navigation" class="main-nav">
              <?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
               </nav>

           </div>
           <?php get_search_form( true ); ?> 
                <!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->

                <!-- if you'd like to use the site description you can un-comment it below -->
          <?php // bloginfo('description'); ?>

      </div>


        </div> <!-- end #inner-header -->

    </header> <!-- end header -->
