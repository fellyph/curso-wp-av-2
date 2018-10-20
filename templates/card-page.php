<div class="singlePage">
  <h2 class="posts__title singlePage__title"><?php the_title(); ?></h2>
  <article class="postCard">
    <div class="postCard__info">
      <?php the_content(); ?>
    </div>

    <div class="postCard__info">
      <?php 
        $extras = get_field('extras');
        //print_r($extras);

        echo '<h3>' . $extras->post_title . '</h3>';
        echo '<div>' . $extras->post_content .  '</div>';
      ?>
    </div>
    <footer class="postCard__footer">
      <a href="<?php bloginfo('url'); ?>">Voltar para a home</a>
    </footer>
  </article>
</div>