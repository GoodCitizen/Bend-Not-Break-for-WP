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
  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
