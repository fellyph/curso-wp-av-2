<article <?php post_class("postCard"); ?>>
  <?php the_post_thumbnail('thumb-post'); ?>
  <div class="postCard__info">
    <h2 class="postCard__title"><?php the_title(); ?></h2>
    <div class="postCard__content">
      <?php the_content(); ?>
    </div>
  </div>
</article>