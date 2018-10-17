<div class="singlePage">
  <h2 class="posts__title singlePage__title"><?php the_title(); ?></h2>
  <article class="postCard">
    <div class="postCard__info">
      <?php the_content(); ?>
      <?php if(get_post_meta( get_the_ID(), 'post_level', true)): ?>
        <p class="postCard__level">
          Nivel do post: 
          <span class="postCard__level_item">
            <?php echo get_post_meta( get_the_ID(), 'post_level', true); ?>
          </span>
        </p>
      <?php endif; ?>
    </div>
    <footer class="postCard__footer">
      <a href="<?php bloginfo('url'); ?>">Voltar para a home</a>
    </footer>
  </article>
</div>