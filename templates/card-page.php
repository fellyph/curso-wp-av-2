<div class="singlePage">
  <h2 class="posts__title singlePage__title"><?php the_title(); ?></h2>
  <article class="postCard">
    <div class="postCard__info">
      <?php the_content(); ?>
    </div>

    <?php
      $extras = get_field('extras');
      if($extras):
    ?>
      <div class="postCard__info">
        <h2>Saiba mais</h2>
        <?php foreach($extras as $post): ?>
          <details class="postExtra">
            <?php 
              
              // setup_postdata
              // define que o dado que a gente vai trabalhar 
              // é um post
              setup_postdata($post); ?>
              <summary class="postExtra__title"> <?php the_title() ?> </summary>
              <div class="postExtra__content">
                <?php the_content(); ?>
              </div>
            <?php wp_reset_postdata();
            ?>
          </details>
        <?php endforeach; ?>

      </div>
    <?php endif; ?>
    <footer class="postCard__footer">
      <a href="<?php bloginfo('url'); ?>">Voltar para a home</a>
    </footer>
  </article>
</div>