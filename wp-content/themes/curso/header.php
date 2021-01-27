<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Wordpress</title>
    <?php wp_head();?>
</head>
<body <?php body_class() ?> >
    <header>
        <section class="top-bar">
            <div class="container">
                 <div class="row">
                    <div class="social-media-icons col-xl-9 col-sm7 col-6"> Ícones Sociais   </div>
                    <div class="search col-xl-3 col-sm-5 col-6 text-right"> Pesquisa  </div>
                </div>
            </div>
        </section>
        <section class="menu-area">
            <div class="container">
                <div class="row">
                    <section class="logo col-md-2 col-12 ">Logo</section>
                        <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
                            <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                                <a class="navbar-brand" href="#">Navbar</a>
                        <?php
                         wp_nav_menu( array(
                            'theme_location'  => 'my_main_menu',
                            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'bs-example-navbar-collapse-1',
                            'menu_class'      => 'navbar-nav mr-auto',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                            ) );
                        ?>
                            </div>
                        </nav>
                   
            </div>
        </section>
     </header>