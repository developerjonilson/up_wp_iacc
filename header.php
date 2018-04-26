<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width">

        <title><?php bloginfo('name'); ?></title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="author" content="Lucas Peixoto" />
        <meta name="language" content="pt-br" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="Abstract" content="" />
        <meta name="url" content="" />
        <meta name="Audience" content="all" />
        <meta name="rating" content="general" />
        <meta name="robots" content="index, follow" />
        <meta name="googlebot" content="index, follow" />
        <meta name="msnbot" content="index,follow,all" />
        <meta name="inktomislurp" content="index,follow,all" />
        <meta name="unknownrobot" content="index,follow,all" />
        <meta name="classification" content="commercial" />
        <meta name="distribution" content="global" />

        <link rel="shortcut icon" href="<?= DIR; ?>/assets/icon/favicon.ico" >

        <?php if (has_post_thumbnail()) : ?>
        <meta property="og:image" content="<?= get_the_post_thumbnail_url(null, 'medium', ''); ?>" />
        <?php else : ?>
        <meta property="og:image" content="<?= DIR; ?>/assets/img/site.png" />
        <?php endif; ?>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

      <section class="section-navbar">
        <div class="container">
          <nav class="navbar nav-background-color font-bold nav-fonts d-flex justify-content-between" style="background-image: url('<?= DIR; ?>/assets/img/doodle_bg.png');">
            <a class="phone-navbar">(88) 3532-3743</a>
            <a class="navbar-bran logo-tag" href=""><img src="<?= DIR; ?>/assets/img/LOGO.png" alt="IACC" class="logotipo"></a>
            <div class="button-store">
                <i class="fa fa-shopping-cart mr-1" aria-hidden="true"></i>
                Lojinha
                <a href="#"></a>
            </div>
          </nav>
          </div>
        </div>
      </section>


      <section class="section-top-bar">
        <div class="container">

          <?php get_template_part( 'templates/menu' ); ?>

        </div>
      </section>
