<?php get_header(); ?>
  <?php while(have_posts()): the_post(); ?>
    <?php get_template_part('templates/card','page'); ?>
    <?php get_template_part('templates/navigation','single'); ?>
  <?php endwhile; ?>
<?php get_footer(); ?>