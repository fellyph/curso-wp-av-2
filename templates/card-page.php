<div class="singlePage">
  <h2 class="posts__title singlePage__title"><?php the_title(); ?></h2>
  <article class="postCard">
    <div class="postCard__info">
      <?php the_content(); ?>
    </div>

    <div class="postCard__info">
      <?php 
        $post = get_field('extras');
        // setup_postdata
        // define que o dado que a gente vai trabalhar 
        // é um post
        setup_postdata($post);
        echo '<h3>' . get_the_title() . '</h3>';
        echo '<div>' . get_the_content() .  '</div>';
        wp_reset_postdata();
      ?>
    </div>
    <footer class="postCard__footer">
      <a href="<?php bloginfo('url'); ?>">Voltar para a home</a>
    </footer>
  </article>
</div>