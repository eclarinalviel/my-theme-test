<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Wordpress Customized Theme </title>
        <?php wp_head(); ?>
    </head>

    <?php
        if( is_front_page() ):
            $mytheme_classes = array('mytheme-class', 'my-class');
        else:
            $mytheme_classes = array('not-mytheme-class');
        endif;
    ?>

<body <?php body_class($mytheme_classes); ?>>
         <!-- Navigation -->
    <nav class="nav-container" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <?php bloginfo( 'name' ); ?>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'nav navbar-nav navbar-right'
                        )
                    );
                ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
     <!--        
        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /> -->