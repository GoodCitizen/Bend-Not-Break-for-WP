<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php // get_template_part('templates/header-top-navbar'); ?>
  <div class="container">
    <div class="row">
      <div class="content bordered-wrapper col-sm-12 col-md-10 col-md-offset-1">
        <div class="mobile-nav row visible-xs">
            <div class="col-xs-12">
              <a href="#nav-book" class="nav-toggle">Menu</a>
              <div class="nav-wrapper">
                <nav id="nav-book" class="nav nav-book">
                  <h3 class="nav-title">The Book</h3>
                  <?php
                    if (has_nav_menu('book_navigation')) :
                      wp_nav_menu(array('theme_location' => 'book_navigation', 'menu_class' => 'nav-list'));
                    endif;
                  ?>
                </nav> <!-- /.nav nav-book -->
                <nav class="nav nav-author">
                  <h3 class="nav-title">The Author</h3>
                  <?php
                    if (has_nav_menu('author_navigation')) :
                      wp_nav_menu(array('theme_location' => 'author_navigation', 'menu_class' => 'nav-list'));
                    endif;
                  ?>
                </nav> <!-- /.nav nav-author -->
                <nav class="nav nav-contact">
                  <h3 class="nav-title">Contact</h3>
                  <?php
                    if (has_nav_menu('contact_navigation')) :
                      wp_nav_menu(array('theme_location' => 'contact_navigation', 'menu_class' => 'nav-list'));
                    endif;
                  ?>
                </nav> <!-- /.nav nav-contact -->
              </div> <!-- /.nav-wrapper -->
            </div> <!-- /.col-xs-12 -->
          </div> <!-- /.row visible-xs -->
        <div class="row">
          <aside class="content-sidebar col-sm-3 hidden-xs">
            <a class="book-burst" href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-book-burst.png" alt="Purchase Now!"></a> <!-- /.book-burst -->
            <nav class="nav nav-book">
              <h3 class="nav-title">The Book</h3>
              <?php
                if (has_nav_menu('book_navigation')) :
                  wp_nav_menu(array('theme_location' => 'book_navigation', 'menu_class' => ''));
                endif;
              ?>
            </nav> <!-- /.nav nav-book -->
            <nav class="nav nav-author">
              <h3 class="nav-title">The Author</h3>
              <?php
                if (has_nav_menu('author_navigation')) :
                  wp_nav_menu(array('theme_location' => 'author_navigation', 'menu_class' => ''));
                endif;
              ?>
            </nav> <!-- /.nav nav-author -->
            <nav class="nav nav-contact">
              <h3 class="nav-title">Contact</h3>
              <?php
                if (has_nav_menu('contact_navigation')) :
                  wp_nav_menu(array('theme_location' => 'contact_navigation', 'menu_class' => ''));
                endif;
              ?>
            </nav> <!-- /.nav nav-contact -->
            <p class="learn-geomagic">
              <a href="http://www.geomagic.com">Learn more about<br><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-geomagic-logo.png" alt="Learn more about Geomagic"></a>
            </p> <!-- /.learn-geomagic -->
            <?php if (roots_display_sidebar()) : ?>
            <div class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
              <?php include roots_sidebar_path(); ?>
            </div><!-- /.sidebar -->
            <?php endif; ?>
          </aside> <!-- /.content-sidebar col-sm-3 -->
          <main class="content-main col-xs-12 col-sm-9" role="main">
            <?php include roots_template_path(); ?>
          </main>

          </div> <!-- /.row -->
          <div class="corner corner-tl"></div> <!-- /.corner corner-tl -->
          <div class="corner corner-tr"></div> <!-- /.corner corner-tr -->
          <div class="corner corner-br"></div> <!-- /.corner corner-br -->
          <div class="corner corner-bl"></div> <!-- /.corner corner-bl -->
        </div> <!-- /.col-sm-12 col-md-10 col-md-offset-1 -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
