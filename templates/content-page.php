<?php while (have_posts()) : the_post(); ?>
  <?php if(get_field('quote')): ?>
  <blockquote class="page-quote">
    <p><?php the_field('quote'); ?></p>
    <?php if(get_field('quote_author')): ?>
    <footer><strong><?php the_field('quote_author'); ?></strong><?php if(get_field('author_info')): ?>, <?php the_field('author_info'); ?> <?php endif; ?></footer>
    <?php endif; ?>
  </blockquote>
  <?php endif; ?>
  <h1 class="title title-primary"><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
  <h2 class="title title-page"><?php the_title(); ?></h2>
  <?php if(is_front_page()): ?>
  <div class="hasFlash">
    <a class="home-book-burst-with-swf" href="/purchase" title="Buy the book">
      <img alt="Available Now" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-book-burst.png">
    </a>
    <div class="wrapper wrapper-video home-book-swf">
      <embed width="418" height="478" src="<?php echo get_template_directory_uri(); ?>/assets/img/bnb.swf" quality="best" pluginspage="http://www.adobe.com/go/getflashplayer" align="middle" play="true" loop="false" scale="showall" wmode="window" devicefont="false" bgcolor="#ffffff" name="home" menu="false" allowfullscreen="false" allowscriptaccess="sameDomain" salign="" type="application/x-shockwave-flash">
    </div>
  </div>
    <a class="home-book-burst" href="/purchase" title="Buy the book">
      <img class="home-book-img img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-book-cover-home.jpg">
    </a>

          <?php endif; ?>

  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
