  <h3 class="title title-reviews">Book Publication Reviews</h3>
<?php query_posts('post_type=Reviews&category_name=book-publications&showposts=-1'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <blockquote class="review">
    <p><?php the_field('review_text'); ?> &mdash; <?php if(get_field('review_link')): ?><a href="<?php the_field('review_link'); ?>">Read more.</a><?php endif; ?></p>
    <footer><?php if(get_field('review_source')): ?><cite title="<?php the_field('review_source'); ?>"><?php the_field('review_source'); ?></cite><?php endif; ?></footer>
  </blockquote>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

  <h3 class="title title-reviews">Media Reviews</h3>
<?php query_posts('post_type=Reviews&category_name=media&showposts=-1'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <blockquote class="review">
    <p><?php the_field('review_text'); ?> &mdash; <?php if(get_field('review_link')): ?><a href="<?php the_field('review_link'); ?>">Read more.</a><?php endif; ?></p>
    <footer><?php if(get_field('review_source')): ?><cite title="<?php the_field('review_source'); ?>"><?php the_field('review_source'); ?></cite><?php endif; ?></footer>
  </blockquote>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

  <h3 class="title title-reviews">Reader Reviews</h3>
<?php query_posts('post_type=Reviews&category_name=reader&showposts=-1'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <blockquote class="review">
    <p><?php the_field('review_text'); ?> &mdash; <?php if(get_field('review_link')): ?><a href="<?php the_field('review_link'); ?>">Read more.</a><?php endif; ?></p>
    <footer><?php if(get_field('review_source')): ?><cite title="<?php the_field('review_source'); ?>"><?php the_field('review_source'); ?></cite><?php endif; ?></footer>
  </blockquote>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>